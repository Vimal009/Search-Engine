package test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
public class test1 {
	public static void main(String[] args) {
		WebDriver driver=new ChromeDriver();
		driver.get("http://localhost/search/loginvia.php");
		driver.manage().window().maximize();
		driver.findElement(By.name("email")).sendKeys("vimal@gmail.com");
		driver.findElement(By.name("password")).sendKeys("Vimal@123");
		driver.findElement(By.name("submit")).click();
	}
}