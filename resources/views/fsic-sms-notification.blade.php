@extends('layout')

@section('content')
  <div style="display: flex; align-items: center;">
    <div style="display: flex; flex: 1; flex-direction: row; align-items: center;">
      <h2 class="title">FSIC SMS Notification</h2>
      <small style="margin-left: 20px; color: #986D9A">BFP Apalit DMS / FSIC SMS Notification</small>
    </div>
  </div>

  <div style="display: flex; flex: 1; flex-direction: column; background-color: #FFF; border-radius: 6px; padding: 0 20px;">
    <div style="display: flex; flex: 1; align-items: center;">
      <div style="flex: 3;">
        <h2 style="color: #2D1967;">Send SMS</h2>
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
      <table style="display: flex; flex-wrap: nowrap; border-collapse: collapse; width: 130%;">
        <tr style="background-color: #EFEBF9;">
          <th><input type="checkbox" name="" id=""></th>
          <th style="width: 125px; padding: 0 10px;">Bin Ban No.</th>
          <th style="width: 125px; padding: 0 10px;">Business Establishment</th>
          <th style="width: 150px; padding: 0 10px;">Business Name</th>
          <th style="width: 200px; padding: 0 10px;">Owner</th>
          <th style="width: 200px; padding: 0 10px;">Type of Occupancy</th>
          <th style="width: 125px; padding: 0 10px;">FSIC Status</th>
          <th style="width: 125px; padding: 0 10px;">FSIC SMS Notification</th>
          <th style="width: 100px; padding: 0 10px;">Action</th>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;"><input type="checkbox" name="" id=""></td>
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">Pending</td>
          <!-- Trigger/Open The Modal -->
          <td style="text-align: center; padding: 10px;"><div class="send-sms-modal" href="#sendSMSModal" style="padding: 5px; color: #FFF;background-color: #1A73E8; border-radius: 25px; cursor: pointer; font-size: small;">Send SMS</div></td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;"><input type="checkbox" name="" id=""></td>
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">Pending</td>
                    <!-- Trigger/Open The Modal -->
          <td style="text-align: center; padding: 10px;"><div class="send-sms-modal" href="#sendSMSModal" style="padding: 5px; color: #FFF;background-color: #1A73E8; border-radius: 25px; cursor: pointer; font-size: small;">Send SMS</div></td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;"><input type="checkbox" name="" id=""></td>
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">Pending</td>
                    <!-- Trigger/Open The Modal -->
          <td style="text-align: center; padding: 10px;"><div class="send-sms-modal" href="#sendSMSModal" style="padding: 5px; color: #FFF;background-color: #1A73E8; border-radius: 25px; cursor: pointer; font-size: small;">Send SMS</div></td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;"><input type="checkbox" name="" id=""></td>
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">Pending</td>
                    <!-- Trigger/Open The Modal -->
          <td style="text-align: center; padding: 10px;"><div class="send-sms-modal" href="#sendSMSModal" style="padding: 5px; color: #FFF;background-color: #1A73E8; border-radius: 25px; cursor: pointer; font-size: small;">Send SMS</div></td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;"><input type="checkbox" name="" id=""></td>
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">Pending</td>
                    <!-- Trigger/Open The Modal -->
          <td style="text-align: center; padding: 10px;"><div class="send-sms-modal" href="#sendSMSModal" style="padding: 5px; color: #FFF;background-color: #1A73E8; border-radius: 25px; cursor: pointer; font-size: small;">Send SMS</div></td>
        </tr>
      </table>
    </div>
  </div>
  <!-- The Add New Applicant Modal -->
  <div id="sendSMSModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <div style="flex: 1;">
          <h3>Send SMS</h3>
        </div>
        <div>
          <span class="close">&times;</span>
        </div>
      </div>
      <div class="modal-body" style="width: 90%;" >
        <form action="">
          <div style="display: flex; flex-direction: column;">
          <textarea name="" id="" cols="30" rows="10" style="border: 2px solid #1A73E8; border-radius: 2px; padding: 10px; font-family: 'Poppins', sans-serif;">Good day!

This is from BFP Apalit. Please be informed that your Fire Safety Inspection Certificate is now approved and available for pickup. Thank you.

Do not reply to this message. This is autogenerated.</textarea>
          <div style="display: flex; align-self: flex-end; margin: 10px;">
            <a href="/fsic-sms-notification" style="color: #1A73E8; border: 1px solid #DADCE0; padding: 5px 0; text-decoration: none; border-radius: 6px; width: 75px; text-align: center;"><small>Cancel</small></a>
            <input type="submit" value="Send" style="background-color: #1A73E8; border: none; color: #FFF; border-radius: 6px; margin-left: 10px; width: 75px;">
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    // Get the div that opens the modal
    var div = document.querySelectorAll("div.send-sms-modal");
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