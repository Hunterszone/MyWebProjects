package suite.tests;

import org.junit.Assert;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.interactions.Actions;

public class WebsiteArticles {
	
	@Test
	public void openArticles() {
		System.setProperty("webdriver.chrome.driver", "chromedriver.exe");
		WebDriver driver = new ChromeDriver();
		driver.manage().window().maximize();
		driver.get("http://hunterszone.hyperphp.com/WebSite/index.php");
		
		Actions hover = new Actions(driver);
		WebElement articles = driver.findElement(By.xpath("//button[text()=' Articles']"));
		hover.moveToElement(articles);
		hover.build();
		hover.perform();
		
		WebElement htmlArticle = driver.findElement(By.xpath("//button[text()='HTML']"));
		htmlArticle.click();
		
		String actualUrl = "http://hunterszone.hyperphp.com/WebSite/quizes/quizes.php";
		String expectedUrl = driver.getCurrentUrl();

		Assert.assertEquals(expectedUrl, actualUrl);
	}
}
