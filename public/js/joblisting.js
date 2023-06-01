// Assuming you have an array of job listings data called 'jobListingsData'
const jobListingsContainer = document.querySelector('.job-listings-container');

function renderJobListings() {
  // Clear the container
  jobListingsContainer.innerHTML = '';

  // Iterate through the job listings data
  for (const jobListing of jobListingsData) {
    // Create a job listing item element
    const jobListingItem = document.createElement('div');
    jobListingItem.classList.add('job-listing-item');

    // Build the HTML content for the job listing item
    const jobListingContent = `
      <h3>${jobListing.title}</h3>
      <p>${jobListing.company}</p>
      <p>${jobListing.location}</p>
      <!-- Add more details as per your design -->

      <a href="${jobListing.link}" class="btn">Apply Now</a>
    `;

    // Set the HTML content to the job listing item
    jobListingItem.innerHTML = jobListingContent;

    // Append the job listing item to the container
    jobListingsContainer.appendChild(jobListingItem);
  }
}

// Call the renderJobListings function to populate the featured job listings section
renderJobListings();
