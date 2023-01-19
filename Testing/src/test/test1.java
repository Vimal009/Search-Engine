package test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
public class test1 {

	public static void main(String[] args) {
		
		WebDriver driver=new ChromeDriver();
		
		driver.get("http://localhost/search/result.php?searchbar=social+media&search1=search");
		
		java.util.List<WebElement> links = driver.findElements(By.tagName("a"));
	   	System.out.println("Total links are"+links.size());
	   	for (int i = 0; i<links.size(); i=i+1)
	   	{
	   		System.out.println("Link  "+ i + "	Link name   "+ links.get(i).getText());
	   	}
	}

}
