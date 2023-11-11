//cin validation
const cin = document.getElementById("cin").addEventListener("input", function () {
  const cinValidationMessage = document.getElementById("cinValidationMessage");
  var cinValue = this.value.toUpperCase();
  cinValue = cinValue.replace(/[^A-Z0-9]/g, '');
  // Check if the CIN is a valid format (e.g., U74140DL2014PTC272628)
  const cinRegex = /^[A-Z][0-9]{5}[A-Z]{2}[0-9]{4}[A-Z]{3}[0-9]{6}$/;
  const isValidLength = cinValue.length === 21;
  this.value = cinValue;
  if (cinRegex.test(cinValue) && isValidLength) {
    cinValidationMessage.textContent = "Valid CIN";
    cinValidationMessage.style.color = "green";
  } else {
    cinValidationMessage.textContent = "Invalid CIN format. Please enter a valid 21-character CIN(U74140DL2014PTC272628)";
    cinValidationMessage.style.color = "red";
  }
});

//name validation
const nameInput = document.getElementById("name");
const nameError = document.getElementById("nameValidationMessage");
nameInput.addEventListener("input", function() {
  this.value = this.value.replace(/[^A-Za-z\s.]/g, ''); // Remove characters that are NOT alphabets, spaces, or dots
  var name = nameInput.value;
  var regex = /^[A-Za-z\s.]+$/;

  if (!regex.test(name)) {
    nameError.textContent = "Only alphabets, dots, and spaces are allowed.";
    nameInput.setCustomValidity("Invalid input");
  } else {
    nameError.textContent = "";
    nameInput.setCustomValidity("");
  }
});

//email validation
const emailInput = document.getElementById("email");
const emailValidationMessage = document.getElementById("emailValidationMessage");
emailInput.addEventListener("input", function() {
    const email = emailInput.value;
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (emailRegex.test(email)) {
        emailValidationMessage.textContent = "Valid email!";
        emailValidationMessage.style.color = "green";
    } else {
        emailValidationMessage.textContent = "Invalid email ID";
        emailValidationMessage.style.color = "red";
    }
});


//telephone validation
const contactInput = document.getElementById("contact");
const telephoneValidation = document.getElementById("Telephone-validation");

contactInput.addEventListener("input", function() {
  this.value = this.value.replace(/[^0-9]/g, '');
  const contact = contactInput.value;
  const regex = /^[0-9]+$/; 

  if (!regex.test(contact) || contact.length !== 11) {
    telephoneValidation.textContent = "Please enter a valid 11-digit telephone number.";
    telephoneValidation.style.color = "red"; // Set the error message color to red
    contactInput.setCustomValidity("Invalid input");
  } else {
    telephoneValidation.textContent = "";
    telephoneValidation.style.color = "green"; // Set the error message color to green when input is valid
    contactInput.setCustomValidity("");
  }
});


//Q9-Financial year for which reporting is being done *



//JS Code to check the size of the pdf
// Function to check the file size of the pdf before submitting the form
document.getElementById('incorporation_certificate').addEventListener('change', function () {
    const fileInput = this;
    const maxFileSizeInBytes = 5 * 1024 * 1024; // 5 MB
    const fileSizeMessage = document.getElementById('fileSizeMessage');
    let invalidFile = false;
    for (let i = 0; i < fileInput.files.length; i++) {
      const file = fileInput.files[i];
      if (file.size > maxFileSizeInBytes) {
        invalidFile = true;
        fileSizeMessage.textContent = 'File size exceeds the maximum allowed size of 5 MB.';
        fileInput.value = ''; // Clear the file input
        break;
      }
    }
    if (!invalidFile) {
      fileSizeMessage.textContent = ''; // Clear the message if the file is valid
    }
});

//POC fields validation
//const pocNameInput = document.getElementById("poc-name");
const pocNameInput = document.getElementById("poc-name");
const pocPhoneInput = document.getElementById("poc-phone");
const pocEmailInput = document.getElementById("poc-email");

//poc-name
const pocNameValidation = document.getElementById("poc-name-validation");

  pocNameInput.addEventListener("input", function() {
    this.value = this.value.replace(/[^A-Za-z\s.]/g, '');
    const pocName = pocNameInput.value;
    const regex = /^[A-Za-z\s.]+$/; // Allow uppercase, lowercase, space, and dot
    if (!regex.test(pocName)) {
      pocNameValidation.textContent = "Only uppercase, lowercase, spaces, and dots are allowed.";
      pocNameInput.setCustomValidity("Invalid input");
    } else {
      pocNameValidation.textContent = "";
      pocNameInput.setCustomValidity("");
    }
  });

//poc-phone number
pocPhoneInput.addEventListener("input", function () {
    // Remove non-digit characters from the phone number
    this.value = this.value.replace(/[^0-9]/g, '');
    const phoneRegex = /^[0-9]+$/;
    const phoneValidation = document.getElementById("poc-phone-validation");
    if (phoneRegex.test(this.value)) {
      phoneValidation.textContent = "";
    } else {s
      phoneValidation.textContent = "Invalid phone number format. Please enter digits only.";
    }
});
//poc-email
const pocValidationMessage = document.getElementById("poc-email-validation"); // Unique ID
pocEmailInput.addEventListener("input", function() {
  const email = pocEmailInput.value;
  const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (emailRegex.test(email)) {
    pocValidationMessage.textContent = "Valid email!";
    pocValidationMessage.style.color = "green";
  } else {
    pocValidationMessage.textContent = "Invalid email ID";
    pocValidationMessage.style.color = "red";
  }
});

//Number of women validation
const numberInput = document.getElementById("p-no");
const numberValidation = document.getElementById("Number-validation");

numberInput.addEventListener("input", function() {
  this.value = this.value.replace(/[^0-9]/g, '');
  const number = numberInput.value;
  const regex = /^[0-9]+$/; 

  if (!regex.test(number)) {
    numberValidation.textContent = "Please enter a valid number.";
    numberValidation.style.color = "red"; // Set the error message color to red
    numberInput.setCustomValidity("Invalid input");
  } else {
    numberValidation.textContent = "";
    numberValidation.style.color = "green"; // Set the error message color to green when input is valid
    numberInput.setCustomValidity("");
  }
});

//Capital validation
const capitalInput = document.getElementById("puc");
const capitalValidation = document.getElementById("Capital-validation");

capitalInput.addEventListener("input", function() {
  this.value = this.value.replace(/[^0-9]/g, '');
  const capital = capitalInput.value;
  const regex = /^[0-9]+$/; 

  if (!regex.test(capital)) {
    capitalValidation.textContent = "Please enter a valid number.";
    capitalValidation.style.color = "red"; // Set the error message color to red
    capitalInput.setCustomValidity("Invalid input");
  } else {
    capitalValidation.textContent = "";
    capitalValidation.style.color = "green"; // Set the error message color to green when input is valid
    capitalInput.setCustomValidity("");
  }
});

//Location validation
const locationInput = document.getElementById("nol");
const locationValidation= document.getElementById("Location-validation");

locationInput.addEventListener("input", function() {
  this.value = this.value.replace(/[^0-9]/g, '');
  const location = locationInput.value;
  const regex = /^[0-9]+$/; 

  if (!regex.test(location)) {
    locationValidation.textContent = "Please enter a valid number.";
    locationValidation.style.color = "red"; // Set the error message color to red
    locationInput.setCustomValidity("Invalid input");
  } else {
    locationValidation.textContent = "";
    locationValidation.style.color = "green"; // Set the error message color to green when input is valid
    locationInput.setCustomValidity("");
  }
});

//Total number of employees fields validation
const toteInput = document.getElementById("tote");
const maleInput = document.getElementById("male");
const femaleInput = document.getElementById("female");
const male1Input = document.getElementById("male1");
const female1Input = document.getElementById("female1");


//Total number of Employees & Workers validation
toteInput.addEventListener("input", function () {
  // Remove non-digit characters from the phone number
  this.value = this.value.replace(/[^0-9]/g, '');
  const toteRegex = /^[0-9]+$/;
  const toteValidation = document.getElementById("tote-validation");
  if (toteRegex.test(this.value)) {
    toteValidation.textContent = "";
  } else {s
    toteValidation.textContent = "Invalid number format. Please enter digits only.";
  }
});

//Permanent Male Employee validation
maleInput.addEventListener("input", function () {
  // Remove non-digit characters from the phone number
  this.value = this.value.replace(/[^0-9]/g, '');
  const maleRegex = /^[0-9]+$/;
  const maleValidation = document.getElementById("male-validation");
  if (maleRegex.test(this.value)) {
    maleValidation.textContent = "";
  } else {s
    maleValidation.textContent = "Invalid number format. Please enter digits only.";
  }
});

//Permanent female Employee validation
femaleInput.addEventListener("input", function () {
  // Remove non-digit characters from the phone number
  this.value = this.value.replace(/[^0-9]/g, '');
  const femaleRegex = /^[0-9]+$/;
  const femaleValidation = document.getElementById("female-validation");
  if (femaleRegex.test(this.value)) {
    femaleValidation.textContent = "";
  } else {s
    femaleValidation.textContent = "Invalid number format. Please enter digits only.";
  }
});

//Temporary Male Employee validation
male1Input.addEventListener("input", function () {
  // Remove non-digit characters from the phone number
  this.value = this.value.replace(/[^0-9]/g, '');
  const male1Regex = /^[0-9]+$/;
  const male1Validation = document.getElementById("male1-validation");
  if (male1Regex.test(this.value)) {
    male1Validation.textContent = "";
  } else {s
    male1Validation.textContent = "Invalid number format. Please enter digits only.";
  }
});

//Temporary female Employee validation
female1Input.addEventListener("input", function () {
  // Remove non-digit characters from the phone number
  this.value = this.value.replace(/[^0-9]/g, '');
  const female1Regex = /^[0-9]+$/;
  const female1Validation = document.getElementById("female1-validation");
  if (female1Regex.test(this.value)) {
    female1Validation.textContent = "";
  } else {s
    female1Validation.textContent = "Invalid number format. Please enter digits only.";
  }
});

//turnover validation
const torInput = document.getElementById("tor");
const torValidation = document.getElementById("Turnover-validation");

torInput.addEventListener("input", function() {
  this.value = this.value.replace(/[^0-9]/g, '');
  const tor = torInput.value;
  const regex = /^[0-9]+$/; 

  if (!regex.test(tor)) {
    torValidation.textContent = "Please enter a valid number.";
    torValidation.style.color = "red"; // Set the error message color to red
    torInput.setCustomValidity("Invalid input");
  } else {
    torValidation.textContent = "";
    torValidation.style.color = "green"; // Set the error message color to green when input is valid
    torInput.setCustomValidity("");
  }
});

/* ************************************************************************************************************************************ */
/*                                                                                                                                      */
/*                                                                Q14Table-START                                                        */
/*                                                                                                                                      */
/* ************************************************************************************************************************************ */
// Function to add a new row at the bottom of the table
function addBottomRow() {
  const table = document.querySelector("#doba table tbody");
  const rows = table.getElementsByTagName("tr");
  const lastRow = rows[rows.length - 1].cloneNode(true);

  // Increment the S.No. in the new row
  const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);
  lastRow.cells[0].getElementsByTagName("input")[0].value = lastSNo + 1;

  // Clear other input fields in the new row
  const inputs = lastRow.getElementsByTagName("input");
  for (let i = 1; i < inputs.length; i++) {
      inputs[i].value = "";
  }

  // Add the new row at the bottom
  table.appendChild(lastRow);

  updateSNoValues();
}

// Function to remove a specific row from the table with confirmation
function removeSpecificRow() {
  const indexInput = document.getElementById("indexInput");
  const parsedIndex = parseInt(indexInput.value);

  if (!isNaN(parsedIndex) && parsedIndex > 1) {
      const table = document.querySelector("#doba table tbody");
      const rows = table.getElementsByTagName("tr");

      if (parsedIndex <= rows.length) {
          // Ask for confirmation before removing the row
          if (confirm("Are you sure you want to remove this row?")) {
              table.removeChild(rows[parsedIndex - 1]);

              // Update the S.No. values in the table
              updateSNoValues();
          }
      } else {
          alert("Invalid index. The specified row does not exist.");
      }
  } else if (parsedIndex === 1) {
      alert("Cannot remove the first row. Please enter a valid index greater than 1.");
  } else {
      alert("Invalid index. Please enter a valid positive number.");
  }

  // Clear the input value after removing the row
  indexInput.value = "";
}


// Function to remove the last row from the table with confirmation
function removeBottomRow() {
  const table = document.querySelector("#doba table tbody");
  const rows = table.getElementsByTagName("tr");

  if (rows.length > 1) { // Ensure there is more than one row
    // Ask for confirmation before removing the row
    if (confirm("Are you sure you want to remove the last row?")) {
        table.removeChild(rows[rows.length - 1]);

        // Update the S.No. values in the table
        updateSNoValues();
    }
  }
}

 // Function to add a new row at a specific index
 function addRowAtIndex() {
  const indexInput = document.getElementById("indexInput");
  const parsedIndex = parseInt(indexInput.value);

  if (!isNaN(parsedIndex) && parsedIndex > 1) {
    const table = document.querySelector("#doba table tbody");
    const rows = table.getElementsByTagName("tr");
    const newRow = rows[rows.length - 1].cloneNode(true);

    // Clear input fields in the new row
    const inputs = newRow.getElementsByTagName("input");
    for (let i = 0; i < inputs.length; i++) {
      inputs[i].value = "";
    }
    // Increment the S.No. in the new row
    const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);

    // Add the new row at the specified index
    if (parsedIndex === 0) {
        // Insert at the beginning
        table.insertBefore(newRow, rows[0]);
    } else if (parsedIndex <= rows.length - 1) {
        table.insertBefore(newRow, rows[parsedIndex]);
    } else {
        table.appendChild(newRow);
    }

    // Set S.No. for all rows starting from the specified index
    for (let i = parsedIndex; i < rows.length; i++) {
        const currentSNo = parseInt(rows[i].cells[0].getElementsByTagName("input")[0].value);
        rows[i].cells[0].getElementsByTagName("input")[0].value = currentSNo + 0;
    }
  } else {
    alert("Invalid index. Please enter a valid index greater than 1.");
  }
  // Clear the input value after adding the row
  indexInput.value = "";
  // Update the S.No. values in the table
  updateSNoValues();
}

// Function to update S.No. values in the table
function updateSNoValues() {
  const table = document.querySelector("#doba table tbody");
  const rows = table.getElementsByTagName("tr");
  for (let i = 1; i < rows.length; i++) {
      rows[i].cells[0].getElementsByTagName("input")[0].value = i + 1;
  }
}

/* ************************************************************************************************************************************ */
/*                                                                                                                                      */
/*                                                                Review                                                                */
/*                                                                                                                                      */
/* ************************************************************************************************************************************ */

function closeModal() {
  document.getElementById('reviewModal').style.display = 'none';
}

function printReview() {
  var printWindow = window.open('', '_blank');
  printWindow.document.write(`
    <html>
      <head>
        <title>Section A: General Disclosures</title>
        <link rel="stylesheet" href="sec_A_print.css">
      </head>
      <body> 
        <div class="container">
        <h1>SECTION A: GENERAL DISCLOSURES</h1>
 `);

  // Embedding HTML and CSS for each form field
  var inputFields = [
    { label: 'Corporate Identity Number (CIN)', id: 'cin' },
    { label: 'Name', id: 'name' },
    { label: 'Incorporation Date', id: 'incorp_date' },
    // Add other fields as needed
  ];

  inputFields.forEach(field => {
    printWindow.document.write(`
      <div class="mb-3">
        <div class="policy">
          <p for="${field.id}" class="form-label" styel="text:center;">${field.label}<span style="color: red;"> *</span>${document.getElementById(field.id).value}</p>
        </div>
      </div>
    `);
  });

  printWindow.document.write(`
  <div class="mb-3">
    <div class="policy">
      <label for="doba" class="form-label">14. &nbsp; Details of business activities (accounting for 90% of the turnover):</label>
    </div>
    <div>
      <table>
        <thead>
          <tr>
            <th class="form-label">S.No.</th>
            <th class="form-label">Description of Main Activity</th>
            <th class="form-label">Description of Business Activity</th>
            <th class="form-label">% of Turnover of the entity</th>
          </tr>
        </thead>
        <tbody>`);
   
    // Access the table using its ID 'p_doba'
    var dobaTable = document.getElementById('p_doba');
    var tableData = [];

    for (var i = 1; i < dobaTable.rows.length; i++) { // Start from 1 to skip the header row
      var row = dobaTable.rows[i];
      var rowData = [];

      for (var j = 0; j < row.cells.length; j++) {
      // Use querySelector to select the input inside the cell
      var cellValue = row.cells[j].querySelector('input').value; // Change this line to get the input value
      rowData.push(cellValue);
      }

      tableData.push(rowData);
    }

    // Display the table data in the new window
    printWindow.document.write('<table border="1">');

    for (var i = 0; i < tableData.length; i++) {
      printWindow.document.write('<tr style="width=50px;">');
      for (var j = 0; j < tableData[i].length; j++) {
        printWindow.document.write('<td style="width=50px;">' + tableData[i][j] + '</td>');
      }
      printWindow.document.write('</tr>');
    }
    printWindow.document.write(`
      </div>
    </body>
  </html>`);

  printWindow.document.close();
  printWindow.print();
}

function confirmSubmission() {
  // You can add additional validation or actions before final submission
  return confirm('Are you sure you want to submit the form?');
}