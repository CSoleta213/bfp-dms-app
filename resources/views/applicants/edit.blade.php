@extends('layout')
   
@section('content')
  <div style="display: flex; flex: 1; align-items: center;">
    <div style="display: flex; flex: 1; flex-direction: row; align-items: center;">
      <h2 class="title">Establishment’s Profile</h2>
      <small style="margin-left: 20px; color: #986D9A">BFP Apalit DMS / Establishments / Open Profile</small>
    </div>
    <div>
      <form>
        <select style="border: 1px solid #2D1967; border-radius: 4px; padding: 10px; font-weight: bold; color: #2D1967; background-color: transparent; color: #2D1967;">
          <option>Year 2018</option>
          <option>Year 2019</option>
          <option>Year 2020</option>
          <option>Year 2021</option>
          <option>Year 2022</option>
          <option>Year 2023</option>
        </select>
      </form>
    </div>
  </div>

  <div style="display: flex; flex: 1; flex-direction: row; background-color: #FFF; border-radius: 6px; padding: 20px;">
    <div style="flex: 1; margin: 0 20px;">
      <div style="display: flex; flex: 1; align-items: center;">
        <a href="{{ route('applicants.index') }}"><i class='bx bx-arrow-back' style="color: #2D1967;"></i></a>
        <h3 style="color: #2D1967; margin-left: 10px;">Establishment 20</h3>
      </div>
      <div>
        <small style="background-color: rgba(255, 165, 0, 0.77); color: #FFF; padding: 5px 10px; border-radius: 50px;">Pending FSIC</small>
        <span style="margin-left: 10px;">4 out of 7 Documents</span>
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="{{ route('applicants.update',$applicant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div style="display: flex; flex: 1; flex-direction: row; align-items: flex-start;">
            <div style="flex: 1;">
              <label for="bin_ban">BIN BAN No.</label><br>
              <input type="text" id="bin_ban" name="bin_ban" value="{{ $applicant->bin_ban }}" style="width: 100%;"><br>
              <em><small>Sample Format: L-00000</small></em>
            </div>
            <div style="margin-left: 10px;">
              <label for="exp_date">Expiration Date</label><br>
              <input type="date" id="exp_date" name="exp_date" value="{{ $applicant->exp_date }}">
            </div>
          </div>

          <label for="bus_name">Business Name</label>
          <input type="text" id="bus_name" name="bus_name" value="{{ $applicant->bus_name }}">
          
          <label for="owner">Owner</label>
          <input type="text" id="owner" name="owner" value="{{ $applicant->owner }}">
          
          <label for="address">Address</label>
          <input type="text" id="spec_address" name="spec_address" value="{{ $applicant->spec_address }}">
          <div style="display: flex; margin: 10px 0;">
            <div style="flex: 1;">
              <select name="brgy" id="brgy" style="width: 100%;">
                <option value="{{ $applicant->brgy }}">{{ $applicant->brgy }}</option>
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
            <div style="display: flex;">
              <input type="text" id="municipality" name="municipality" value="Apalit" style="width: 75px; margin-left: 5px;" readonly>
              <input type="text" id="province" name="province" value="Pampanga" style="width: 100px; margin-left: 5px;" readonly>
              <input type="text" id="postal_code" name="postal_code" value="2016" style="width: 50px; margin-left: 5px;" readonly>
            </div>
          </div>
          <div style="display: flex;">
            <div>
              <label for="contact_no">Contact Number</label><br>
              <input type="tel" id="contact_no" name="contact_no" value="{{ $applicant->contact_no }}">
            </div>
            <div style="flex: 1; margin-left: 10px;">
              <label for="occupancy_type">Type of Occupancy</label><br>
              <select name="occupancy_type" id="occupancy_type" style="width: 100%;">
                <option value="{{ $applicant->occupancy_type }}">{{ $applicant->occupancy_type }}</option>
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
            <!-- <button type="submit" style="margin-left: 10px; background-color: #1A73E8; color: #FFF; border: none; width: 100px;">Add</button> -->
            <input type="submit" value="Add" style="margin-left: 10px; background-color: #1A73E8; color: #FFF; border: none; width: 100px;">
          </div>
        </div>
      </form>
    </div>
    <div>
      <hr style="border: 1px solid #2D1967; height: 100%;">
    </div>
    <div style="flex: 1; margin: 20px;">
      <div style="display: flex; flex: 1; flex-direction: column; margin: 25px 0px;">
        <span>Tax Order of Payment</span>
        <div style="display: flex; align-items: center;">
          <input type="file" name="" id="" style="background-color: transparent; border: 1px solid #DADCE0; border-radius: 6px; flex: 1;">
          <div style="display: flex; justify-content: space-between; width: 125px; margin-left: 10px;">
            <button style="background-color: #3779B3; color: #FFF; border: none; border-radius: 5px; padding: 5px 10px;"><i class='bx bx-show bx-xs'></i></button>
            <button style="background-color: #F0AF51; color: #FFF; border: none; border-radius: 5px; padding: 5px 10px;"><i class='bx bxs-pencil bx-xs'></i></button>
            <button style="background-color: #DD5351; color: #FFF; border: none; border-radius: 5px; padding: 5px 10px;"><i class='bx bx-trash bx-xs'></i></button>
          </div>
        </div>
      </div>
      <div style="display: flex; flex: 1; flex-direction: column; margin: 25px 0px;">
        <span>Application Form</span>
        <div style="display: flex; align-items: center;">
          <input type="file" name="" id="" style="background-color: transparent; border: 1px solid #DADCE0; border-radius: 6px; flex: 1;">
          <div style="display: flex; justify-content: space-between; width: 125px; margin-left: 10px;">
            <button style="background-color: #3779B3; color: #FFF; border: none; border-radius: 5px; padding: 5px 10px;"><i class='bx bx-show bx-xs'></i></button>
            <button style="background-color: #F0AF51; color: #FFF; border: none; border-radius: 5px; padding: 5px 10px;"><i class='bx bxs-pencil bx-xs'></i></button>
            <button style="background-color: #DD5351; color: #FFF; border: none; border-radius: 5px; padding: 5px 10px;"><i class='bx bx-trash bx-xs'></i></button>
          </div>
        </div>
      </div>
      <div style="display: flex; flex: 1; flex-direction: column; margin: 25px 0px;">
        <span>Pre-Fire Plan</span>
        <div style="display: flex; align-items: center;">
          <input type="file" name="" id="" style="background-color: transparent; border: 1px solid #DADCE0; border-radius: 6px; flex: 1;">
          <div style="display: flex; justify-content: space-between; width: 125px; margin-left: 10px;">
            <button style="background-color: #3779B3; color: #FFF; border: none; border-radius: 5px; padding: 5px 10px;"><i class='bx bx-show bx-xs'></i></button>
            <button style="background-color: #F0AF51; color: #FFF; border: none; border-radius: 5px; padding: 5px 10px;"><i class='bx bxs-pencil bx-xs'></i></button>
            <button style="background-color: #DD5351; color: #FFF; border: none; border-radius: 5px; padding: 5px 10px;"><i class='bx bx-trash bx-xs'></i></button>
          </div>
        </div>
      </div>
      <div style="display: flex; flex: 1; flex-direction: column; margin: 25px 0px;">
        <span>Receipt</span>
        <div style="display: flex; align-items: center;">
          <input type="file" name="" id="" style="background-color: transparent; border: 1px solid #DADCE0; border-radius: 6px; flex: 1;">
          <div style="display: flex; justify-content: space-between; width: 125px; margin-left: 10px;">
            <button style="background-color: #3779B3; color: #FFF; border: none; border-radius: 5px; padding: 5px 10px;"><i class='bx bx-show bx-xs'></i></button>
            <button style="background-color: #F0AF51; color: #FFF; border: none; border-radius: 5px; padding: 5px 10px;"><i class='bx bxs-pencil bx-xs'></i></button>
            <button style="background-color: #DD5351; color: #FFF; border: none; border-radius: 5px; padding: 5px 10px;"><i class='bx bx-trash bx-xs'></i></button>
          </div>
        </div>
      </div>
      <div style="display: flex; flex: 1; flex-direction: column; margin: 25px 0px;">
        <span>Inspection Order</span>
        <div style="display: flex; align-items: center;">
          <input type="file" name="" id="" style="background-color: transparent; border: 1px solid #DADCE0; border-radius: 6px; flex: 1;">
          <div style="width: 125px; margin-left: 10px;">
            <button style="width: 125px; background-color: #1A73E8; color: #FFF; border: none; border-radius: 5px; display: flex; justify-content: center; padding: 5px;"><i class='bx bx-upload bx-xs'></i>
            <span style="margin-left: 10px;">Upload</span></button>
          </div>
        </div>
      </div>
      <div style="display: flex; flex: 1; flex-direction: column; margin: 25px 0px;">
        <span>After Inspection Report</span>
        <div style="display: flex; align-items: center;">
          <input type="file" name="" id="" style="background-color: transparent; border: 1px solid #DADCE0; border-radius: 6px; flex: 1;">
          <div style="width: 125px; margin-left: 10px;">
            <button style="width: 125px; background-color: #1A73E8; color: #FFF; border: none; border-radius: 5px; display: flex; justify-content: center; padding: 5px;"><i class='bx bx-upload bx-xs'></i>
            <span style="margin-left: 10px;">Upload</span></button>
          </div>
        </div>
      </div>
      <div style="display: flex; flex: 1; flex-direction: column; margin: 25px 0px;">
        <span>FSIC Business</span>
        <div style="display: flex; align-items: center;">
          <input type="file" name="" id="" style="background-color: transparent; border: 1px solid #DADCE0; border-radius: 6px; flex: 1;">
          <div style="width: 125px; margin-left: 10px;">
            <button style="width: 125px; background-color: #1A73E8; color: #FFF; border: none; border-radius: 5px; display: flex; justify-content: center; padding: 5px;"><i class='bx bx-upload bx-xs'></i>
            <span style="margin-left: 10px;">Upload</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
