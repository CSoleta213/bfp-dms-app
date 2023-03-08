@extends('layout')

@section('content')
  <div style="display: flex; align-items: center;">
    <div style="display: flex; flex: 1; flex-direction: row; align-items: center;">
      <h2 class="title">Establishments</h2>
      <small style="margin-left: 20px; color: #986D9A">BFP Apalit DMS / Establishments / List of Establishments</small>
    </div>
    <div>
      <!-- Trigger/Open The Modal -->
      <div class="add-new-applicant-modal" href="#addNewApplicantModal" style="display: flex; align-items: center; background-color: transparent; border: 1px solid #2D1967; padding: 10px; border-radius: 4px; color: #2D1967; font-weight: bold; justify-content: center; cursor: pointer;"><i class='bx bx-plus'></i> Add New Applicant</div>
    </div>
  </div>

  <div style="display: flex; flex: 1; flex-direction: column; background-color: #FFF; border-radius: 6px; padding: 0 20px;">
    <div style="display: flex; flex: 1; align-items: center;">
      <div style="flex: 3;">
        <h2 style="color: #2D1967;">List of Establishments</h2>
      </div>
      <div style="display: flex; flex: 7; justify-content: flex-end; align-items: center;">
        <div style="display: flex; background-color: #EFEBF9; border-radius: 6px; padding: 5px;">
          <select name="" id="" style="background-color: transparent; border: none; text-align: center; font-weight: bold; color: #2D1967;">
            <option value="ALL">ALL</option>
            <option value="Approved">Approved</option>
            <option value="Pending">Pending</option>
          </select>
          <form action="" style="display: flex;">
            <input type="search" name="" id="" placeholder="Search for Bin Ban Number" style="width: 250px;">
            <button type="submit" style="background-color: #25438C; border: none; border-radius: 2px; color: #FFF;"><i class='bx bx-search'></i></button>
          </form>
        </div>
        <div style="margin: 10px;">
        <button style="display: flex; padding: 10px; background-color: #27A745; color: #FFF; border: none; border-radius: 6px;">
          <i class='bx bx-export'></i>
          <span style="margin-left: 5px;">Export to Excel</span>
        </button>
        </div>
        <button style="display: flex; padding: 10px; background-color: #1A73E8; color: #FFF; border: none; border-radius: 6px;">
          <i class='bx bx-printer'></i>
          <span style="margin-left: 5px;">Print</span>
        </button>
      </div>
    </div>
    <div style="overflow-x:auto;">
      <table style="display: flex; flex-wrap: nowrap; border-collapse: collapse; width: 160%;">
        <tr style="background-color: #EFEBF9;">
          <th style="width: 125px; padding: 0 10px;">Bin Ban No.</th>
          <th style="width: 125px; padding: 0 10px;">Business Establishment</th>
          <th style="width: 150px; padding: 0 10px;">Business Name</th>
          <th style="width: 200px; padding: 0 10px;">Owner</th>
          <th style="width: 200px; padding: 0 10px;">Type of Occupancy</th>
          <th style="width: 125px; padding: 0 10px;">FSIC Status</th>
          <th style="width: 175px; padding: 0 10px;">Files Uploaded</th>
          <th style="width: 150px; padding: 0 10px;">Expiry Date</th>
          <th style="width: 125px; padding: 0 10px;">Expires In</th>
          <th style="width: 125px; padding: 0 10px;">Action</th>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">7/7 Documents</td>
          <td style="text-align: center; padding: 10px;">DD-MM-YYYY</td>
          <td style="text-align: center; padding: 10px;">10 Days Ago</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">7/7 Documents</td>
          <td style="text-align: center; padding: 10px;">DD-MM-YYYY</td>
          <td style="text-align: center; padding: 10px;">10 Days Ago</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">7/7 Documents</td>
          <td style="text-align: center; padding: 10px;">DD-MM-YYYY</td>
          <td style="text-align: center; padding: 10px;">10 Days Ago</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">7/7 Documents</td>
          <td style="text-align: center; padding: 10px;">DD-MM-YYYY</td>
          <td style="text-align: center; padding: 10px;">10 Days Ago</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">7/7 Documents</td>
          <td style="text-align: center; padding: 10px;">DD-MM-YYYY</td>
          <td style="text-align: center; padding: 10px;">10 Days Ago</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">7/7 Documents</td>
          <td style="text-align: center; padding: 10px;">DD-MM-YYYY</td>
          <td style="text-align: center; padding: 10px;">10 Days Ago</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">7/7 Documents</td>
          <td style="text-align: center; padding: 10px;">DD-MM-YYYY</td>
          <td style="text-align: center; padding: 10px;">10 Days Ago</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">7/7 Documents</td>
          <td style="text-align: center; padding: 10px;">DD-MM-YYYY</td>
          <td style="text-align: center; padding: 10px;">10 Days Ago</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">7/7 Documents</td>
          <td style="text-align: center; padding: 10px;">DD-MM-YYYY</td>
          <td style="text-align: center; padding: 10px;">10 Days Ago</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">7/7 Documents</td>
          <td style="text-align: center; padding: 10px;">DD-MM-YYYY</td>
          <td style="text-align: center; padding: 10px;">10 Days Ago</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
      </table>
    </div>
  </div>

  <!-- The Add New Applicant Modal -->
  <div id="addNewApplicantModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <div style="flex: 1; text-align: center;">
          <h3>Add New Applicant</h3>
        </div>
        <div>
          <span class="close">&times;</span>
        </div>
      </div>
      
      <form action="" method="POST">
      <hr style="border: 1px solid #2D1967; width: 100%;">
      @csrf
        <div class="modal-body">
          <div style="display: flex; flex: 1; flex-direction: row; align-items: flex-start;">
            <div style="flex: 1;">
              <label for="binban">BIN BAN No.</label><br>
              <input type="text" id="binban" name="binban" placeholder="BIN BAN No." style="width: 100%;"><br>
              <em><small>Sample Format: L-00000</small></em>
            </div>
            <div style="margin-left: 10px;">
              <label for="expiration-date">Expiration Date</label><br>
              <input type="date" id="expiration-date" name="expiration-date" placeholder="dd-mm-yyyy">
            </div>
          </div>

          <label for="business-name">Business Name</label>
          <input type="text" id="business-name" name="business-name" placeholder="Business Name">
          
          <label for="owner">Owner</label>
          <input type="text" id="owner" name="owner" placeholder="Name of Owner">
          
          <label for="address">Address</label>
          <input type="text" id="address" name="address" value="Central Luzon, Pampanga, Apalit" readonly>
          <div style="display: flex; margin: 10px 0;">
            <select name="brgy" id="brgy">
              <option value="">--- Select a Barangay ---</option>
              <option value="Balucuc">Balucuc</option>
              <option value="Calantipe">Calantipe</option>
              <option value="Cansinala">Cansinala</option>
              <option value="Capalangan">Capalangan</option>
              <option value="Colgante">Colgante</option>
              <option value="Paligui">Paligui</option>
              <option value="Sampaloc">Sampaloc</option>
              <option value="San Juan">San Juan</option>
              <option value="San Vicente">San Vicente</option>
              <option value="Sucad">Sucad</option>
              <option value="Sulipan">Sulipan</option>
              <option value="Tabuyuc">Tabuyuc</option>
            </select>
            <input type="text" id="address" name="address" placeholder="Postal Code" style="margin-left: 10px;">
          </div>
          <input type="text" id="address" name="address" placeholder="Street Name, Building, House No.">

          <div style="display: flex;">
            <div>
              <label for="contact-no">Contact Number</label><br>
              <input type="tel" id="contact-no" name="contact-no" placeholder="09123456789">
            </div>
            <div style="flex: 1; margin-left: 10px;">
              <label for="occupancy-type">Type of Occupancy</label><br>
              <select name="occupancy-type" id="occupancy-type" style="width: 100%;">
                <option value="">--- Select Type ---</option>
                <option value="Apartment">Apartment</option>
                <option value="Hotel">Hotel</option>
                <option value="Mercantile">Mercantile</option>
                <option value="Business">Business</option>
                <option value="Storage">Storage</option>
                <option value="Industrial">Industrial</option>
                <option value="Healthcare">Healthcare</option>
                <option value="Educational">Educational</option>
                <option value="Special Structures">Special Structures</option>
              </select>
            </div>
          </div>

          <hr style="border: 1px solid #2D1967; width: 100%;">

          <div style="display: flex; justify-content: center; margin: 0 0 20px 0px; align-items: center;">
            <a href="/establishments" style="color: #1A73E8; text-decoration: none; border: 1px solid #DADCE0; padding: 5px; border-radius: 6px; width: 100px; text-align: center;">Cancel</a>
            <input type="submit" value="Add" style="margin-left: 10px; background-color: #1A73E8; color: #FFF; border: none; width: 100px;">
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Get the div that opens the modal
    var div = document.querySelectorAll("div.add-new-applicant-modal");
    // All page modals
    var modals = document.querySelectorAll('.modal');
    // Get the <span> element that closes the modal
    var spans = document.getElementsByClassName("close");
    // When the user clicks the div, open the modal
    for (var i = 0; i < div.length; i++) {
    div[i].onclick = function(e) {
        e.preventDefault();
        modal = document.querySelector(e.target.getAttribute("href"));
        modal.style.display = "flex";
      }
    }
    // When the user clicks on <span> (x), close the modal
    for (var i = 0; i < spans.length; i++) {
    spans[i].onclick = function() {
        for (var index in modals) {
          if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
        }
      }
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
        for (var index in modals) {
          if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
        }
      }
    }
  </script>
@endsection