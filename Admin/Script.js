  document.addEventListener("DOMContentLoaded", function () 
  {
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () 
    {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) 
      {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } 
      
      else 

      {
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    };

//------------------------------------------------------------------------//
     
    let dashboardButton = document.querySelector("#dashboardButton");
    let productButton = document.querySelector("#productButton");
    let orderButton = document.querySelector("#orderButton");
    let analyticsButton = document.querySelector("#analyticsButton");
    let stockButton = document.querySelector("#stockButton");
    let totalButton = document.querySelector("#totalButton");
    let teamButton = document.querySelector("#teamButton");
    let messagesButton = document.querySelector("#messagesButton");
    let favoritesButton = document.querySelector("#favoritesButton");
    let sittingsButton = document.querySelector("#sittingsButton");


    dashboardButton.addEventListener("click", showDashboard);
    productButton.addEventListener("click", showProductPage);
    orderButton.addEventListener("click", showorder);
    analyticsButton.addEventListener("click", showanalytics);
    stockButton.addEventListener("click", showstock);
    totalButton.addEventListener("click", showtotal);
    teamButton.addEventListener("click", showteam);
    messagesButton.addEventListener("click", showmessages);
    favoritesButton.addEventListener("click", showfavorites);
    sittingsButton.addEventListener("click", showsittings);
  
let dashboardSection = document.getElementById("dashboardSection");
let productSection = document.getElementById("productSection");
let orderSection = document.getElementById("orderSection");
let analyticsSection = document.getElementById("analyticsSection");
let stockSection = document.getElementById("stockSection");
let totalSection = document.getElementById("totalSection");
let teamSection = document.getElementById("teamSection");
let messagesSection = document.getElementById("messagesSection");
let favoritesSection = document.getElementById("favoritesSection");
let sittingsSection = document.getElementById("sittingsSection");



function showDashboard() 
{
    dashboardSection.style.display = "block";
    productSection.style.display = "none";
    orderSection.style.display = "none";
    analyticsSection.style.display = "none";
    stockSection.style.display = "none";
    totalSection.style.display = "none";
    teamSection.style.display = "none";
    messagesSection.style.display = "none";
    favoritesSection.style.display = "none";
    sittingsSection.style.display = "none";
}


function showProductPage() 
{
    dashboardSection.style.display = "none";
    productSection.style.display = "block";
    orderSection.style.display = "none";
    analyticsSection.style.display = "none";
    stockSection.style.display = "none";
    totalSection.style.display = "none";
    teamSection.style.display = "none";
    messagesSection.style.display = "none";
    favoritesSection.style.display = "none";
    sittingsSection.style.display = "none";
}

function showorder() 
{
    dashboardSection.style.display = "none";
    productSection.style.display = "none";
    orderSection.style.display = "block";
    analyticsSection.style.display = "none";
    stockSection.style.display = "none";
    totalSection.style.display = "none";
    teamSection.style.display = "none";
    messagesSection.style.display = "none";
    favoritesSection.style.display = "none";
    sittingsSection.style.display = "none";
}

function showanalytics() 
{
    dashboardSection.style.display = "none";
    productSection.style.display = "none";
    orderSection.style.display = "none";
    analyticsSection.style.display = "block";
    stockSection.style.display = "none";
    totalSection.style.display = "none";
    teamSection.style.display = "none";
    messagesSection.style.display = "none";
    favoritesSection.style.display = "none";
    sittingsSection.style.display = "none";
}

function showstock() 
{
    dashboardSection.style.display = "none";
    productSection.style.display = "none";
    orderSection.style.display = "none";
    analyticsSection.style.display = "none";
    stockSection.style.display = "block";
    totalSection.style.display = "none";
    teamSection.style.display = "none";
    messagesSection.style.display = "none";
    favoritesSection.style.display = "none";
    sittingsSection.style.display = "none";
}

function showtotal() 
{
    dashboardSection.style.display = "none";
    productSection.style.display = "none";
    orderSection.style.display = "none";
    analyticsSection.style.display = "none";
    stockSection.style.display = "none";
    totalSection.style.display = "block";
    teamSection.style.display = "none";
    messagesSection.style.display = "none";
    favoritesSection.style.display = "none";
    sittingsSection.style.display = "none";
}

function showteam() 
{
    dashboardSection.style.display = "none";
    productSection.style.display = "none";
    orderSection.style.display = "none";
    analyticsSection.style.display = "none";
    stockSection.style.display = "none";
    totalSection.style.display = "none";
    teamSection.style.display = "block";
    messagesSection.style.display = "none";
    favoritesSection.style.display = "none";
    sittingsSection.style.display = "none";
}

function showmessages() 
{
    dashboardSection.style.display = "none";
    productSection.style.display = "none";
    orderSection.style.display = "none";
    analyticsSection.style.display = "none";
    stockSection.style.display = "none";
    totalSection.style.display = "none";
    teamSection.style.display = "none";
    messagesSection.style.display = "block";
    favoritesSection.style.display = "none";
    sittingsSection.style.display = "none";
}

function showfavorites() 
{
    dashboardSection.style.display = "none";
    productSection.style.display = "none";
    orderSection.style.display = "none";
    analyticsSection.style.display = "none";
    stockSection.style.display = "none";
    totalSection.style.display = "none";
    teamSection.style.display = "none";
    messagesSection.style.display = "none";
    favoritesSection.style.display = "block";
    sittingsSection.style.display = "none";
}

function showsittings() 
{
    dashboardSection.style.display = "none";
    productSection.style.display = "none";
    orderSection.style.display = "none";
    analyticsSection.style.display = "none";
    stockSection.style.display = "none";
    totalSection.style.display = "none";
    teamSection.style.display = "none";
    messagesSection.style.display = "none";
    favoritesSection.style.display = "none";
    sittingsSection.style.display = "block";
}

//--------------------------------------------------------//

// Get references to the recent-sales box and the See All button
const recentSalesBox = document.getElementById('recentSalesBox');
const seeAllButton = document.getElementById('seeAllButton');

// Variable to track whether the box is expanded or not
let isExpanded = false;

// Function to toggle the box height and show/hide more data
function toggleBoxHeight() {
  if (isExpanded) {
    recentSalesBox.style.height = '475px'; // Set the initial height
  } else {
    recentSalesBox.style.height = 'auto'; // Set auto height to expand
  }
  isExpanded = !isExpanded; // Toggle the state
}

// Initially, hide the extra data
recentSalesBox.style.height = '475px';

// Add a click event listener to the See All button
seeAllButton.addEventListener('click', toggleBoxHeight);

//---------------------------------------------------------------//

}
);