const puppeteer = require("puppeteer");

(async () => {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    const htmlContent = `<h1>Hello world from js!!</h1>`;
    await page.setContent(htmlContent);
    await page.pdf({ path: "storage/pdf/js.pdf", format: "a4" });

    await browser.close();
})();
