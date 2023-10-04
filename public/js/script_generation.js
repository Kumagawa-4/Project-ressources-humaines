

function generateFilteredJobOffer() {
    const jobOffers = [
      {
        title: 'Software Engineer',
        position: 'Full-time',
        companyName: 'ABC Company',
        companyDescription: 'A leading tech company',
        place: 'New York',
        age: 25,
        jobDescription: 'Responsibilities include...'
      },
      {
        title: 'Marketing Specialist',
        position: 'Part-time',
        companyName: 'XYZ Corporation',
        companyDescription: 'A global marketing agency',
        place: 'London',
        age: 30,
        jobDescription: 'Requirements:'
      },
      // Add more job offers...
    ];
  
    // Get the user input
    const userInput = document.getElementById('jobTitleInput').value;
  
    // Filter the jobOffers array based on the user input
    const filteredJobOffers = jobOffers.filter(jobOffer => jobOffer.title === userInput);
  
    if (filteredJobOffers.length === 0) {
      alert('No job offers found for the given title');
      return;
    }
  
    // Create a new jsPDF instance
    const doc =  new jsPDF();
  
    // Set the font size and style
    doc.setFontSize(18);
    doc.setFont('helvetica', 'bold');
  
    // Add the title to the document
    doc.text('Filtered Job Offers', 10, 10);
  
    // Set the font size and style for the content
    doc.setFontSize(12);
    doc.setFont('helvetica', 'normal');
  
    // Loop through the filtered job offers and add the details to the document
    let startY = 20;
    filteredJobOffers.forEach(jobOffer => {
      doc.text(`Title: ${jobOffer.title}`, 10, startY);
      doc.text(`Position: ${jobOffer.position}`, 10, startY + 10);
      doc.text(`Company Name: ${jobOffer.companyName}`, 10, startY + 20);
      doc.text(`Company Description: ${jobOffer.companyDescription}`, 10, startY + 30);
      doc.text(`Place: ${jobOffer.place}`, 10, startY + 40);
      doc.text(`Age: ${jobOffer.age}`, 10, startY + 50);
      doc.text(`Job Description: ${jobOffer.jobDescription}`, 10, startY + 60);
      startY += 80; // Increase the vertical position for the next job offer
    });
  
    // Save the generated PDF
    doc.save('filtered_job_offers.pdf');
  }