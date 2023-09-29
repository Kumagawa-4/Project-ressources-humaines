function createJobListing() {
  const title = document.getElementById('title').value;
  const description = document.getElementById('description').value;
  const requirements = document.getElementById('requirements').value.split('\n');
  const benefits = document.getElementById('benefits').value;
  const companyDescription = document.getElementById('companyDescription').value;
  const applicationEmail = document.getElementById('applicationEmail').value;

  const jobListingContainer = document.getElementById('jobListingContainer');
  const content = `
    <h2>${title}</h2>
    <p>${description}</p>
    <ul>
      ${requirements.map(req => `<li>${req}</li>`).join('')}
    </ul>
    <p>${benefits}</p>
    <p>${companyDescription}</p>
    <p>Pour postuler, veuillez envoyer votre CV et votre lettre de motivation à <span class="highlight">${applicationEmail}</span>.</p>
  `;
  jobListingContainer.innerHTML = content;
}