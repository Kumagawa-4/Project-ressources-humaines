import jsPDF from 'jspdf';

class PdfTransformation {
    generatePDF() {
        // mise en place de document 
        // var data = [
        //   ["Name", "Age", "City"],
        //   ["John Doe", "28", "New York"],
        //   ["Jane Smith", "32", "San Francisco"],
        //   ["Bob Johnson", "45", "Chicago"]
        // ];
  
        var doc = new jsPDF();
        doc.table(10, 10, data);
        var nomDossier = document.querySelector(".nomProjet").value
        doc.save(nomDossier);
    }
}