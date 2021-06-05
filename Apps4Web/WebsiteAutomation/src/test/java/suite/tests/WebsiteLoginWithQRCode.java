package suite.tests;

import java.awt.image.BufferedImage;
import java.io.IOException;
import java.net.URL;
import java.util.Collections;
import java.util.Hashtable;
import java.util.Properties;
import java.util.Random;
import java.util.concurrent.CompletableFuture;

import javax.imageio.ImageIO;

import org.junit.Assert;
import org.junit.Before;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;

import com.google.zxing.BinaryBitmap;
import com.google.zxing.DecodeHintType;
import com.google.zxing.LuminanceSource;
import com.google.zxing.Result;
import com.google.zxing.client.j2se.BufferedImageLuminanceSource;
import com.google.zxing.common.HybridBinarizer;
import com.google.zxing.qrcode.QRCodeReader;
import com.microsoft.aad.msal4j.ClientCredentialFactory;
import com.microsoft.aad.msal4j.ClientCredentialParameters;
import com.microsoft.aad.msal4j.ConfidentialClientApplication;
import com.microsoft.aad.msal4j.IAuthenticationResult;

public class WebsiteLoginWithQRCode {

	private static String authority;
	private static String clientId;
	private static String secret;
	private static String scope;

	@Before
	public void setUp() throws IOException {
		setUpSampleData();
	}

	@Test
	public void login() throws Exception {
		System.setProperty("webdriver.chrome.driver", "chromedriver.exe");
		WebDriver driver = new ChromeDriver();
		driver.manage().window().maximize();
//		driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
		driver.get("http://hunterszone.hyperphp.com/WebSite/qr/generateQR.php");

		String src = driver.findElement(By.id("qrImg")).getAttribute("src");
		System.out.println("image url is: " + src);

		// Read img from URL
		URL urlOfImage = new URL(src);
		BufferedImage bufferedImage = ImageIO.read(urlOfImage);

		LuminanceSource source = new BufferedImageLuminanceSource(bufferedImage);
		BinaryBitmap bitmap = new BinaryBitmap(new HybridBinarizer(source));

		// Scan QR code
		QRCodeReader reader = new QRCodeReader();
		Hashtable<DecodeHintType, Object> decodeHints = new Hashtable<DecodeHintType, Object>();
		decodeHints.put(DecodeHintType.PURE_BARCODE, Boolean.TRUE);
		Result result = reader.decode(bitmap, decodeHints);
		String textPresentInImage = result.getText();

		// Click link to enter code
		WebElement enterCodeLink = driver.findElement(By.xpath("//a[text()='Enter verification code']"));
		enterCodeLink.click();

		// Extract code and enter it
		driver.get("http://hunterszone.hyperphp.com/WebSite/qr/verifyQR.html");
		WebElement codeField = driver.findElement(By.name("code"));
//		IAuthenticationResult iAuthenticationResult = getAccessTokenByClientCredentialGrant();
		String code = numericGenerator(); //iAuthenticationResult.accessToken(); - throws AADSTS7000215: Invalid client secret is provided, TBD
		System.out.println("Mocked code: " + code);
		codeField.sendKeys(code);

		// Send code
		WebElement sendCode = driver.findElement(By.xpath("//button[text()='Send code']"));
		sendCode.click();

		Assert.assertEquals(textPresentInImage,
				"otpauth://totp/@me4gaming.com?secret=7WAO342QFANY6IKBF7L7SWEUU79WL3VMT920VB5NQMW");

		try {
			Thread.sleep(2000);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

		driver.quit();
	}

	private String numericGenerator() {
		// It will generate 6 digit random Number.
		// from 0 to 999999
		Random rnd = new Random();
		int number = rnd.nextInt(999999);

		// this will convert any number sequence into 6 character.
		return String.format("%06d", number);
	}

	private static IAuthenticationResult getAccessTokenByClientCredentialGrant() throws Exception {

		ConfidentialClientApplication app = ConfidentialClientApplication
				.builder(clientId, ClientCredentialFactory.createFromSecret(secret)).authority(authority).build();

		// With client credentials flows the scope is ALWAYS of the shape
		// "resource/.default", as the
		// application permissions need to be set statically (in the portal), and then
		// granted by a tenant administrator
		ClientCredentialParameters clientCredentialParam = ClientCredentialParameters
				.builder(Collections.singleton(scope)).build();

		CompletableFuture<IAuthenticationResult> future = app.acquireToken(clientCredentialParam);
		return future.get();
	}

	private static void setUpSampleData() throws IOException {
		// Load properties file and set properties used throughout the sample
		Properties properties = new Properties();
		properties.load(Thread.currentThread().getContextClassLoader().getResourceAsStream("application.properties"));
		authority = properties.getProperty("AUTHORITY");
		clientId = properties.getProperty("CLIENT_ID");
		secret = properties.getProperty("SECRET");
		scope = properties.getProperty("SCOPE");
	}
}
