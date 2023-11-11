<!DOCTYPE html>
<html>
<head>
<title>CRUS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/jpg" href="../images/cusrrs.jpg"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="sec_A.css">
    <style>
        .hidden {
            display: none;
        }
        /* Add this CSS */
        @media screen and (max-width: 800px) {
            #cinDiv {
                display: none;
            }
        }
    </style>
</head>

<body>
    <header class="header" style="width:100%;">
        <h1 class="logo"><a href="#">CUSRS</a></h1>
        <ul class="main-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </header>
      
    <div class="container">
    <form method="post" enctype="multipart/form-data">
        <h1>SECTION A: GENERAL DISCLOSURES</h1>
        <!-------------------------------------------------------------------------------------------------------------------------------------------------->
        <!--                                                                                                                                              -->
        <!--                                                             I. DETAILS OF THE LISTED ENTITY                                                  -->
        <!--                                                                                                                                              -->
        <!--------------------------------------------------------------------------------------------------------------------------------------------------> 
        
        <!--Detail Of Listed Entity Start-->
        <div class="mb-3">
          <div class="policy">
            <label class="form-label"><span style="color: ;">I.</span>&nbsp;&nbsp;&nbsp;<u>Detail Of Listed Entity</u></label>
          </div>
        </div>
        <!--Detail Of Listed Entity END-->

        <!-- CIN Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="cin" class="form-label">1. &nbsp;Corporate Identity Number (CIN)<span style="color: red;"> * </span></label>
          </div>
          <input type="text" class="form-control" id="cin" name="cin"  placeholder="Enter CIN of Listed Entity" maxlength="21" required>
          <p id="cinValidationMessage" style="color: red;"></p>
        </div>
        <!-- CIN End -->

        <!-- Name Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="name" class="form-label">2. &nbsp;Name of the Listed Entity<span style="color: red;"> * </span></label>
          </div>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name of Listed Entity" required>
          <p id="nameValidationMessage" style="color: red;"></p>
        </div>
        <!-- Name End -->

        <!-- Year Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="incorp_date" class="form-label">3. &nbsp;Year of incorporation<span style="color: red;"> * </span></label>
          </div>
          <select class="form-control" id="incorp_date" name="incorp_date" required></select>
        </div>
        <script>
          var start = 1900;
          var end = 2023;
          var options = "";
          for (var year = start; year <= end; year++) {
            options += "<option value='" + year + "'>" + year + "</option>";
          }
          document.getElementById("incorp_date").innerHTML = options;
        </script>
        <!-- Year End -->

        <!-- Registered Office Address Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="office_address" class="form-label">4. &nbsp;Registered Office Address<span style="color: red;"> * </span></label>
          </div>
          <input type="text" class="form-control" id="office_address" name="office_address" placeholder="Enter registered address" required>
        </div>
        <!-- Registered Office Address End -->

        <!-- Corporate Address Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="corporate_address" class="form-label">5. &nbsp;Corporate Address<span style="color: red;"> * </span></label>
          </div>
          <input type="text" class="form-control" id="corporate_address" name="corporate_address" placeholder="Enter Corporate address" required>
        </div>
        <!-- Corporate Address End -->
        
        <!-- Email Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="email" class="form-label">6. &nbsp;Email (Enter only official email ID)<span style="color: red;"> * </span></label>
          </div>
          <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          <p id="emailValidationMessage"></p>
        </div>
        <!-- Email End -->

        <!-- Telephone Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="telephone" class="form-label">7. &nbsp;Telephone<span style="color: red;"> * </span></label>
          </div>
          <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Enter your contact number" maxlength="11">
          <p id="Telephone-validation"></p>
        </div>
        <!-- Telephone End -->
        
        <!-- Website Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="website" class="form-label">8. &nbsp;Website<span style="color: red;"> * </span></label>
          </div>  
          <input type="url" class="form-control" id="website" name="website" placeholder="Enter your website link" required>
          <p id="websiteValidationMessage"></p>
        </div>
        <!-- Website End -->  
        
        <!-- Reporting Financial year Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="reporting_fin_year" class="form-label">9. &nbsp;Financial year for which reporting is being done<span style="color: red;"> * </span></label>
          </div>
          <select class="form-control" id="reporting_fin_year" name="reporting_fin_year" required></select>
        </div>
        <script>
          var start = 1900;
          var end = 2023;
          var options = "";
          for (var year = start; year <= end; year++) {
            options += "<option value='" + year + "'>" + year + "</option>";
          }
          document.getElementById("reporting_fin_year").innerHTML = options;
        </script>
        <!-- Reporting Financial year End -->

        <!-- PDF UPLOAD Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="incorporation_certificate" class="form-label">Please provide your incorporation certificate as a PDF file (Max 5 MB)<span style="color: red;"> * </span></label>
          </div>
          <input type="file" id="file" name="uploadedFiles[]" accept=".pdf" required multiple><br><br>
          <div id="fileSizeMessage" style="color: red;"></div> <!-- Message container -->
        </div>
        <!-- PDF UPLOAD End -->
        
        <!-- Name of the Stock Exchange(s) Start -->
        <div class="mb-3">
          <div class="policy">
            <label class="form-label">10. &nbsp;Name of the Stock Exchange(s) where shares are listed<span style="color: red;"> * </span></label>
          </div>
          <div id="stock_name" class="form-control form-label">
            <input type="checkbox" id="BSE" name="stock_name[]" value="BSE">
            <label for="BSE">Bombay Stock Exchange (BSE)</label><br>
            <input type="checkbox" id="NSE" name="stock_name[]" value="NSE">
            <label for="NSE">National Stock Exchange (NSE)</label><br>
            <input type="checkbox" id="CSE" name="stock_name[]" value="CSE">
            <label for="CSE">Calcutta Stock Exchange (CSE)</label><br>
            <input type="checkbox" id="MSE" name="stock_name[]" value="MSE">
            <label for="MSE">Madras Stock Exchange (MSE)</label><br>
            <input type="checkbox" id="DSE" name="stock_name[]" value="DSE">
            <label for="DSE">Delhi Stock Exchange (DSE)</label><br>
            <input type="checkbox" id="INX" name="stock_name[]" value="INX">
            <label for="INX">India International Exchange (INX)</label><br>
          </div>
        </div>
        <!-- Name of the Stock Exchange(s) End -->

        <!-- Paid-up Capital Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="puc" class="form-label">11. &nbsp;Paid-up Capital<span style="color: red;"> * </span></label>
          </div>
          <input type="text" class="form-control" id="puc" name="puc" required pattern="[0-9]+">
        </div>
        <!-- Paid-up Capital End -->

        <!-- Details of Point of Contact Start -->
        <div class="container">
          <div class="mb-3">
            <div class="policy">
              <label for="details" class="form-label">12. &nbsp;Name and contact details (telephone, email address) of the person who may be contacted in case of any queries on the BRSR report<span style="color: red;"> * </span></label><br>
            </div>
          </div>
          <!-- Name of the Point of Contact Start -->
          <div class="mb-3">
            <div class="policy">
              <label for="poc-name" class="form-label">Name<span style="color: red;"> * </span></label>
            </div>  
            <input type="text" class="form-control" id="poc-name" name="poc_name" placeholder="Enter the name of the person to contact for queries" required>
          </div>

          <!-- Phone Number of Point of Contact Start -->
          <div class="mb-3">
            <div class="policy">
              <label for="poc-phone" class="form-label">Phone Number<span style="color: red;"> * </span></label>
            </div>
            <input type="text" class="form-control" id="poc-phone" name="poc_phone" required pattern="[0-9]+" placeholder="Enter the contact number" maxlength="10">
          </div> 
          <!-- Phone validation message -->
          <span id="poc-phone-validation" style="color: red;"></span>
          <!-- Phone Number of Point of Contact End -->
          <!-- Email Address of Point of Contact Start -->
          <div class="mb-3">
            <div class="policy">
              <label for="poc-email" class="form-label">Email Address (Enter only official email ID)<span style="color: red;"> * </span></label>
            </div>
            <input type="text" class="form-control" id="poc-email" name="poc_email" class="form-control" placeholder="Enter email address" required>
          </div>
          <!-- Email validation message -->
          <span id="poc-email-validation" style="color: red;"></span>
          <!-- Email Address of Point of Contact End -->
        </div>
        <!-- Details of Point of Contact End -->
        
        <!-- Reporting boundary Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="rep_b" class="form-label">13. &nbsp;Reporting boundary - Are the disclosures under this report made on a standalone basis (i.e. only for the entity) or on a consolidated basis (i.e. for the entity and all the entities
                                                  which form a part of its consolidated financial statements, taken together).</label>
          </div>
            <input type="text" class="form-control" id="rep_b" name="rep_b" placeholder="Enter Reporting boundary" >
        </div>
        <!-- Reporting boundary End -->

        <!-------------------------------------------------------------------------------------------------------------------------------------------------->
        <!--                                                                                                                                              -->
        <!--                                                              II-PRODECT/SERVICE                                                              -->
        <!--                                                                                                                                              -->
        <!--------------------------------------------------------------------------------------------------------------------------------------------------> 
        
        <!-- Details of Business activities Start -->
        <div class="mb-3 container">
          <div class="policy">
            <label for="doba" class="form-label">14. &nbsp; Details of business activities (accounting for 90% of the turnover):</label>
          </div>
          <div id="doba">
            <table id="p_doba">
              <thead>
                <tr>
                  <th class="form-label">S.No.</th>
                  <th class="form-label">Description of Main Activity</th>
                  <th class="form-label">Description of Business Activity</th>
                  <th class="form-label">% of Turnover of the entity</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width:8%;"><input type="number" id="doba" id="p_doba" name="doba[]" class="table-control" required value="1" readonly></td>
                  <td><input type="text" id="doba" name="doba[]" class="form-control" required></td>
                  <td><input type="text" id="doba" name="doba[]" class="form-control" required></td>
                  <td><input type="text" id="doba" name="doba[]" class="form-control" required></td>
                </tr>
              </tbody>
            </table>
            <div>
              <input type="number" id="indexInput" placeholder="Enter Index">
              <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex()">Add At Index</button>
              <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow()">Remove At Index</button>
              <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow()">Add Row</button>
              <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow()">Remove Row</button>
            </div>
          </div>  
        </div>
        <!-- Details of Business activities End -->

        <!-- Details of the products & services Start -->
        <div class="mb-3 container">
          <div class="policy">
            <label for="dops" class="form-label">15. &nbsp; Products/Services sold by the entity (accounting for 90% of the entity’s Turnover):</label>
          </div>
          <div id="dops">
            <table>
              <tr>
                <th class="form-label">S.No.</th>
                <th class="form-label">Product/Service</th>
                <th class="form-label">NIC Code</th>
                <th class="form-label">% of total Turnover contributed</th>
              </tr>
              <tr>
                <td style="width:8%;"><input type="number" id="dops" name="dops[]" class="table-control" required></td>
                <td><input type="text" id="dops" name="dops[]" class="form-control" required></td>
                <td><input type="text" id="dops" name="dops[]" class="form-control" required></td>
                <td><input type="text" id="dops" name="dops[]" class="form-control" required></td>
              </tr>
              <tr>
              <td style="width:8%;"><input type="number" id="dops" name="dops[]" class="table-control" required></td>
                <td><input type="text" id="dops" name="dops[]" class="form-control" required></td>
                <td><input type="text" id="dops" name="dops[]" class="form-control" required></td>
                <td><input type="text" id="dops" name="dops[]" class="form-control" required></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- Details of the products & services End -->

        <!-------------------------------------------------------------------------------------------------------------------------------------------------->
        <!--                                                                                                                                              -->
        <!--                                                              III-OPERATIONS                                                                  -->
        <!--                                                                                                                                              -->
        <!--------------------------------------------------------------------------------------------------------------------------------------------------> 

        <!-- Number of locations Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="nol" class="form-label">Number of locations</label>
          </div>
          <input type="text" class="form-control" id="nol" name="nol" placeholder=" Enter number of locations where plants/operation/ offices of the entity are located.">
        </div>
        <!-- Number of locations End -->

        <!-- Details regarding markets served by the entity Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="drm" class="form-label">Details regarding markets served by the entity.</label>
          </div>
            <textarea id="drm" name="drm" rows="5" cols="50" class="form-control" placeholder="Enter details regarding markets served by the entity." ></textarea>
        </div>
        <!-- Details regarding markets served by the entity End -->

        <!-- Details of Employees & Workers Start -->
        <div class="container">
          <div class="mb-3">
            <div class="policy">
              <label for="details" class="form-label">Details of Employees & Workers</label>
            </div>
          </div>
          <!-- Total number of Employees & Workers Start -->
          <div class="mb-3">
            <div class="policy">
              <label for="tote" class="form-label">Total number of Employees & Workers</label>
            </div>
            <input type="text" class="form-control" id="tote" name="tote" placeholder="Enter the total number of Employees & Workers">
          </div>
          <!-- Total number of Employees & Workers End -->

          <!-- Permanent Employees Start -->
          <div class="mb-3">
            <div class="policy">
              <label for="type" class="form-label">Permanent</label>
            </div>
            <div class="mb-3">
              <div class="policy"> 
                <label for="male" class="form-label">Male Employee</label>
              </div>
              <input type="text" class="form-control" id="male" name="male" placeholder="Number of male employee">
            </div>
            <div class="mb-3">
              <div class="policy">
                <label for="female" class="form-label">Female Employee</label>
              </div>
              <input type="text" class="form-control" id="female" name="female" placeholder="Number of female employee">
            </div>
          </div>
          <!-- Permanent Employees End -->

          <!-- Temporary Employees Start -->
          <div class="mb-3">
            <div class="policy">
              <label for="type1" class="form-label">Temporary</label>
            </div>
            <div class="mb-3">
              <div class="policy">
                <label for="male1" class="form-label">Male Employee</label>
              </div>
              <input type="text" class="form-control" id="male1" name="malet" placeholder="Number of male employee">
            </div>
            <div class="mb-3">
              <div class="policy">
                <label for="female1" class="form-label">Female Employee</label>
              </div>
              <input type="text" class="form-control" id="female1" name="femalet" placeholder="Number of female employee">
            </div>
          </div>
          <!-- Temporary Employees End -->
        </div>  
        <!-- Details of Employees & Workers End -->
        
        <!-- Participation/Inclusion/Representation of Women Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="p-no" class="form-label"><span style="color: red;"> * </span>Participation/Inclusion/Representation of Women</label>
          </div>
          <input type="text" class="form-control" id="p-no" name="p_no" required pattern="[0-9]+" placeholder=" Enter number of Female members of the BOD/KMP">
        </div>
        <!-- Participation/Inclusion/Representation of Women End -->

      <!-- Turnover rate for permanent employees & workers (For past 3 years) Start -->
      <div class="mb-3">
        <div class="policy">
          <label for="tor" class="form-label"><span style="color: red;"> * </span>Turnover rate for permanent employees & workers (For past 3 years)</label>
        </div>
        <input type="text" class="form-control" id="tor" name="tor" required pattern="[0-9]+" placeholder="Enter Turnover rate for past 3 years">
      </div>
      <!-- Turnover rate for permanent employees & workers (For past 3 years) End -->

      <!-- Details of corporate structure Start -->
      <div class="container">
        <div class="mb-3">
          <div class="policy">
            <label for="details" class="form-label">Details of corporate structure</label>
          </div>
          <!-- Holding Start -->
          <div class="mb-3">
            <div class="policy">
              <label for="holding" class="form-label">Holding</label>
            </div>
            <input type="text" class="form-control" id="holding" name="holding" placeholder="Enter the details of Holding">
          </div> 
          <!-- Holding End -->
        </div>
        <!-- Subsidiary Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="subsidiary" class="form-label">Subsidiary</label>
          </div>  
          <input type="text" class="form-control" id="subsidiary" name="subsidiary" placeholder="Enter the subsidiary">
        </div>  
        <!-- Subsidiary End -->
        <!-- Associate Companies (including joint ventures) Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="ac" class="form-label">Associate Companies (including joint ventures)</label>
          </div>
          <textarea id="ac" class="form-control" name="ac" rows="5" cols="50" class="form-control" placeholder="Enter the details of Associate Companies (including joint ventures)" ></textarea>
        </div>
        <!-- Associate Companies (including joint ventures) End -->
      </div>
        <!-- Details of corporate structure End -->

      <!-- Details of Corporate Social Responsibility (CSR) Activities Start -->
      <div class="mb-3">
        <div class="policy">
          <label for="csr" class="form-label">Details of Corporate Social Responsibility (CSR) Activities </label>
        </div>
        <textarea id="csr" class="form-control" name="csr" rows="5" cols="50" placeholder="Enter the details of CSR Activities" ></textarea>  
      </div>
      <!-- Details of Corporate Social Responsibility (CSR) Activities End -->

      <!-- Grievance redressal Start -->
      <div class="mb-3">
        <div class="policy">
          <label for="gre" class="form-label"><span style="color: red;"> * </span>Grievance redressal </label>
        </div>
        <textarea id="gre" class="form-control" name="gre" rows="5" cols="50" placeholder=" Raise concerns about, & seek remedy for, the organization’s potential & actual negative impacts on them" required></textarea>  
      </div>
      <!-- Grievance redressal End -->

      <!-- Overview of the entity’s material responsible business conduct issues Start -->
      <div class="mb-3">
        <div class="policy">
          <label for="overview" class="form-label"><span style="color: red;"> * </span>Overview of the entity’s material responsible business conduct issues </label>
        </div>
        <textarea id="overview" class="form-control" name="overview" rows="5" cols="50" placeholder="Increased awareness & understanding of climate risks & opportunities within the entity resulting in better risk management & more informed strategic planning" required></textarea>  
      </div>
      <!-- Overview of the entity’s material responsible business conduct issues End -->

    <script>
      
    </script>

    <!-- Add this part at the end of your form -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" onclick="printReview()">Review Form</button>
        <button type="submit" class="btn btn-primary" onclick="return confirmSubmission()">Submmit</button>
    </div>

    </form>
  </div>
 
  <script src="sec_A.js"></script>
  <script src="sec_A_form_submit_validation.js"></script> 
  
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!--                                                                                                                                              -->
    <!--                                                              FOOTER-START                                                                    -->
    <!--                                                                                                                                              -->
    <!--------------------------------------------------------------------------------------------------------------------------------------------------> 
    <footer class="footer">
      <div class="row">
        <div class="column">
          <h4>About Us</h4>
          <p> Christ University Sustainable development and Research group</p>
        </div>
        <div class="column">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#"><i class="fa fa-angle-right"></i> Sustainable Goals</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Contact us</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> About us</a></li>
          </ul>
        </div>
        <div class="column">
          <h4>Connect with Us</h4>
          <ul class="social-icons">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
      <p class="copyright">© 2023 All Rights Reserved</p>
    </footer>
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!--                                                                                                                                              -->
    <!--                                                              FOOTER-END                                                                      -->
    <!--                                                                                                                                              -->
    <!--------------------------------------------------------------------------------------------------------------------------------------------------> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>