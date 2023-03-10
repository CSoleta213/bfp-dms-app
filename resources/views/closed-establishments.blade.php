@extends('layout')

@section('content')
  <div style="display: flex; align-items: center;">
    <div style="display: flex; flex: 1; flex-direction: row; align-items: center;">
      <h2 class="title">Closed Establishments</h2>
      <small style="color: #986D9A">
        <ul style="display: flex; align-items: center; list-style: none;">
          <li style="margin: 5px;"><a href="" style="text-decoration: none; color: #986D9A">BFP Apalit DMS</a></li>
          >
          <li style="margin: 5px;"><a href="" style="text-decoration: none; color: #986D9A">Closed Establishments</a></li>
        </ul>
      </small>
    </div>
  </div>

  <div style="display: flex; flex: 1; flex-direction: column; background-color: #FFF; border-radius: 6px; padding: 0 20px;">
    <div style="display: flex; flex: 1; align-items: center;">
      <div style="flex: 4;">
        <h2 style="color: #2D1967;">List of Closed Establishments</h2>
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
      <table style="border-collapse: collapse; width: 100%;">
        <tr style="background-color: #EFEBF9;">
          <th style="min-width: 125px; padding: 0 10px;">Bin Ban No.</th>
          <th style="min-width: 175px; padding: 0 10px;">Business Name</th>
          <th style="min-width: 200px; padding: 0 10px;">Owner</th>
          <th style="min-width: 150px; padding: 0 10px;">Type of Occupancy</th>
          <th style="min-width: 150px; padding: 0 10px;">Date of Closing</th>
          <th style="min-width: 125px; padding: 0 10px;">Action</th>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td>Old Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">25-Jul-2021</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td>Old Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">25-Jul-2021</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td>Old Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">25-Jul-2021</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td>Old Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">25-Jul-2021</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
        <tr style="border-bottom: 1px solid #E0E0E0;">
          <td style="text-align: center; padding: 10px;">A-00034</td>
          <td>Old Establishment 17</td>
          <td>Ms. Duvata Aquino</td>
          <td style="text-align: center; padding: 10px;">Apartment</td>
          <td style="text-align: center; padding: 10px;">25-Jul-2021</td>
          <td style="text-align: center; padding: 10px;">open profile</td>
        </tr>
      </table>
    </div>
  </div>
@endsection