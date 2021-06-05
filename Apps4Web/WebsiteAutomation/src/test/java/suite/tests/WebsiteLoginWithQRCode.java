package suite.tests;

import java.awt.image.BufferedImage;
import java.net.URL;
import java.util.Hashtable;
import java.util.Random;

import javax.imageio.ImageIO;

import org.junit.Assert;
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

public class WebsiteLoginWithQRCode {

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

		// Convert it to bitmap
		LuminanceSource source = new BufferedImageLuminanceSource(bufferedImage);
		BinaryBitmap bitmap = new BinaryBitmap(new HybridBinarizer(source));

		// Read & scan the QR code
		QRCodeReader reader = new QRCodeReader();
		Hashtable<DecodeHintType, Object> decodeHints = new Hashtable<DecodeHintType, Object>();
		decodeHints.put(DecodeHintType.PURE_BARCODE, Boolean.TRUE);
		Result result = reader.decode(bitmap, decodeHints);
		String textPresentInImage = result.getText();

		// Click link to enter the token
		WebElement enterCodeLink = driver.findElement(By.xpath("//a[text()='Enter verification code']"));
		enterCodeLink.click();

		// Extract token and enter it
		driver.get("http://hunterszone.hyperphp.com/WebSite/qr/verifyQR.html");
		WebElement codeField = driver.findElement(By.name("code"));
		String code = numericGenerator();
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
}
