import jsPDF from 'jspdf';
    
    var table = new Tabulator("#existing-table", {
        layout: "fitColumns",
        selectable: true,
        pagination: "local",
        paginationSize: 10,
        // Add any other Tabulator options you need
    })

    function generatePDF() {
        table.download("pdf", "data.pdf", {
            orientation:"portrait", 
            title:"Dynamics Quotation Report", //add title to report
            jsPDF:{
                unit:"in", //set units to inches
            },
            autoTable:{ //advanced table styling
                styles: {
                    fillColor: [100, 255, 255]
                },
                columnStyles: {
                    id: {fillColor: 255}
                },
                margin: {top: 60},
            },
            documentProcessing:function(doc){
            }
        });
    }
