@extends('layout')

@section('content')
  <!-- UPPER PART OF DASHBOARD PAGE
  This part includes the title page, Breadcrumbs, and date input(use as filter) -->
  <div style="display: flex; flex: 1; align-items: center;">
    <div style="display: flex; flex: 1; flex-direction: row; align-items: center;">
      <h2 class="title">Dashboard</h2>
      <small style="color: #986D9A">
        <ul style="display: flex; align-items: center; list-style: none;">
          <li style="margin: 5px;"><a href="" style="text-decoration: none; color: #986D9A">BFP Apalit DMS</a></li>
          >
          <li style="margin: 5px;"><a href="" style="text-decoration: none; color: #986D9A">Dashboard</a></li>
        </ul>
      </small>
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

  <!-- DASHBOARD MAIN CONTENT -->
  <div>
    <div style="display: flex;">
    <div style="display: flex; flex: 4; background-color: #FFF; padding: 20px; border-radius: 6px;">
      <canvas id="complyingEstablishment"></canvas>
    </div>

    <div class="establishment-number" style=" display: flex; flex: 2; flex-direction: column; justify-content: space-between; margin-left: 20px; background-color: #FFF; padding: 20px; border-radius: 6px;">
      <div style="line-height: 50px;">
        <p id="total">1,851</p>
        <p>Total Establishments</p>
      </div>
      <div style="line-height: 50px;">
        <p id="renew">1,388</p>
        <p>FSIC Renewal</p>
      </div>
      <div style="line-height: 50px;">
        <p id="new">473</p>
        <p>New Applicants</p>
      </div>
    </div>
    </div>

    <div style="display: flex; flex: 1; margin: 20px 0;">
    <div class="new-applicants-container" style="display: flex; flex: 3; padding: 20px; background-color: #FFF; border-radius: 6px;">
      <p class="new-applicants-title">New Applicants for January 2023</p>
      <div class="new-applicants-detail">
        <div>
          <p id="new-applicants-title">Bin Ban #</p>
          <ul>
            <li>D-00097</li>
            <li>S-00108</li>
            <li>A-00030</li>
            <li>O-00080</li>
            <li>B-00102</li>
          </ul>
        </div>
        <div>
          <p id="new-applicants-title">Establishment's Name</p>
          <ul>
            <li>Daniel's Coffee</li>
            <li>MCGI Hospital</li>
            <li>Chua Compound</li>
            <li>Happy Basket</li>
            <li>Hotel Impressa</li>
          </ul>
        </div>
        <div>
          <p id="new-applicants-title">Occupancy</p>
          <ul>
            <li>Business</li>
            <li>Healthcare</li>
            <li>Apartment</li>
            <li>Business</li>
            <li>Hotel</li>
          </ul>
        </div>
      </div>
      <p id="view-all">View all New Applicants</p>
    </div>

    <div class="establishment-status-container" style="display: flex; flex: 2; flex-direction: column; justify-content: space-between; margin-left: 20px; padding: 20px; background-color: #FFF; border-radius: 6px;">
      <div class="establishment-status">
        <p id="total">1,851</p>
        <p id="status-text">Approved FSIC</p>
        <img src="{{ asset('img/approved.png') }}">
      </div>
      <div class="establishment-status">
        <p id="new">0</p>
        <p id="status-text" id="status-text">Pending Renewal</p>
        <img src="{{ asset('img/pending-renewal.png') }}">
      </div>
      <div class="establishment-status">
        <p id="renew">0</p>
        <p id="status-text">Pending New</p>
        <img src="{{ asset('img/pending-new.png') }}">
      </div>
      <div class="establishment-status">
        <p id="closed">10</p>
        <p id="status-text">Closed Establishments</p>
        <img src="{{ asset('img/close-establishment.png') }}">
      </div>
    </div>
    </div>

    <div style="display: flex; flex: 1;">
    <div style="display: flex; flex: 1; justify-content: center; background-color: #FFF; padding: 20px; border-radius: 6px;">
      <canvas id="perBrgy" style="width:100%; max-width:300px"></canvas>
    </div>
    <div style="display: flex; flex: 1; justify-content: center; background-color: #FFF; margin-left: 20px; padding: 20px; border-radius: 6px;">
      <canvas id="perOccupancy" style="width:100%; max-width:300px"></canvas>
    </div>
    </div>

  </div>

  <script>
    var xValues = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
    var yValues = [298, 880, 1035, 900, 600, 820, 320, 935, 715, 816, 620, 610];
    var barColors = "#3F6AD8";

    new Chart("complyingEstablishment", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: "Complying Establishment"
        }
      }
    });

    var xValues = ["Balucuc", "Calantipe", "Cansinala", "Capalangan", "Colgante"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",
      "#1e7145"
    ];

    new Chart("perBrgy", {
      type: "doughnut",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "No. of Establishment per Barangay"
        }
      }
    });

    var xValues = ["Apartment", "Hotel", "Mercantile", "Business", "Storage"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",
      "#1e7145"
    ];

    new Chart("perOccupancy", {
      type: "doughnut",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "No. of Establishment per Type of Occupancy"
        }
      }
    });
  </script>

@endsection
