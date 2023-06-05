window.onload = function () {
    document.getElementById("download-pdf")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'my-invoice.pdf',
                html2canvas: { scale: 1 },
            };
            html2pdf().from(invoice).set(opt).save();
            // html2pdf().from(invoice).save();
        })
}