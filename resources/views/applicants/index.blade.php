@extends('layout')
 
@section('content')
  <div style="display: flex; align-items: center;">
    <div style="display: flex; flex: 1; flex-direction: row; align-items: center;">
      <h2 class="title">Establishments</h2>
      <small style="color: #986D9A">
        <ul style="display: flex; align-items: center; list-style: none;">
          <li style="margin: 5px;"><a href="" style="text-decoration: none; color: #986D9A">BFP Apalit DMS</a></li>
          >
          <li style="margin: 5px;"><a href="" style="text-decoration: none; color: #986D9A">Establishments</a></li>
        </ul>
      </small>
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
   
    @if ($message = Session::get('success'))
      <div style="text-align: center; color: #05D34E;">
        <p>{{ $message }}</p>
      </div>
    @endif
   
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
        @foreach ($applicants as $applicant)
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">{{ $applicant->bin_ban }}</td>
          <td style="text-align: center; padding: 10px;">Renewal</td>
          <td>{{ $applicant->bus_name }}</td>
          <td>{{ $applicant->owner }}</td>
          <td style="text-align: center; padding: 10px;">{{ $applicant->occupancy_type }}</td>
          <td style="text-align: center; padding: 10px;">Approved</td>
          <td style="text-align: center; padding: 10px;">7/7 Documents</td>
          <td style="text-align: center; padding: 10px;">{{ $applicant->exp_date }}</td>
          <td style="text-align: center; padding: 10px;">10 Days Ago</td>
          <td style="text-align: center; padding: 10px;"><a href="{{ route('applicants.edit',$applicant->id) }}">open profile</a></td>
        </tr>
        <!-- <tr>
            <td>
                <form action="{{ route('applicants.destroy',$applicant->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('applicants.show',$applicant->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('applicants.edit',$applicant->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr> -->
        @endforeach
      </table>
      {!! $applicants->links() !!}
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
      
      <form action="{{ route('applicants.store') }}" method="POST">
        <hr style="border: 1px solid #2D1967; width: 100%;">
        @csrf
        <div class="modal-body">
          <div style="display: flex; flex: 1; flex-direction: row; align-items: flex-start; margin-bottom: 5px;">
            <div style="flex: 1;">
              <label for="bin_ban">BIN BAN No.</label><br>
              <input type="text" id="bin_ban" name="bin_ban" placeholder="BIN BAN No." style="width: 100%;"><br>
              <em><small>Sample Format: L-00000</small></em>
            </div>
            <div style="margin-left: 10px;">
              <label for="exp_date">Expiration Date</label><br>
              <input type="date" id="exp_date" name="exp_date" placeholder="dd-mm-yyyy">
            </div>
          </div>

          <div style="display: flex; flex-direction: column; margin-bottom: 5px;">
            <label for="bus_name">Business Name</label>
            <input type="text" id="bus_name" name="bus_name" placeholder="Business Name">
          </div>
          
          <div style="display: flex; flex-direction: column; margin-bottom: 5px;">
            <label for="owner">Owner</label>
            <input type="text" id="owner" name="owner" placeholder="Name of Owner">
          </div>
          
          <div style="display: flex; flex-direction: column; margin-bottom: 5px;">
            <label for="address">Address</label>
            <input type="text" id="spec_address" name="spec_address" placeholder="House No., Building, Street Name">
            <div style="display: flex; margin: 10px 0 0 0;">
              <div style="flex: 1;">
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
              </div>
              <div style="display: flex;" >
                <input type="text" id="municipality" name="municipality" value="Apalit" style="width: 75px; margin-left: 5px;" readonly>
                <input type="text" id="province" name="province" value="Pampanga" style="width: 100px; margin-left: 5px;" readonly>
                <input type="text" id="postal_code" name="postal_code" value="2016" style="width: 50px; margin-left: 5px;" readonly>
              </div>
            </div>
          </div>
          <div style="display: flex; flex-direction: row;">
            <div style="display: flex; flex-direction: column;">
              <label for="contact_no">Contact Number</label>
              <input type="tel" id="contact_no" name="contact_no" placeholder="09123456789">
            </div>
            <div style="display: flex; flex: 1; flex-direction: column; margin-left: 10px;">
              <label for="occupancy_type">Type of Occupancy</label>
              <select name="occupancy_type" id="occupancy_type" style="width: 100%;">
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