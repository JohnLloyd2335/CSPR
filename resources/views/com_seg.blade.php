@extends('layouts.app')

@section('content')
<style>
  table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
  }

  th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #fff;
  }

  th {
      background-color: #153B5F;
      color: #fff;
  }

  input[type="date"],
  button[type="button"] {
      background-color: #153B5F;
      color: #fff;
      padding: 10px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
  }

  input[type="date"]:hover,
  button[type="button"]:hover {
      background-color: #FF9D1E; /* Hover color */
  }

  .date-filter,
  .table-container {
      margin-top: 20px;
  }

  .middle-buttons button {
      margin-right: 10px;
      transition: background-color 0.3s ease;
  }

  .middle-buttons button:hover {
      background-color: #FF9D1E; /* Hover color */
  }

  /* Add these styles to your existing CSS */

  .date-filter {
      background-color: #34495e;
      padding: 20px;
      border-radius: 5px;
      margin-top: 20px;
  }

  .manage-sale {
      background-color: #34495e;
      padding: 20px;
      border-radius: 5px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 20px;
  }

  .table-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      margin-top: 20px;
  }

  .data-container {
      background-color: #34495e;
      padding: 20px;
      border-radius: 5px;
      margin-top: 20px;
  }

  .manage-sale,
  .table-container {
      margin-top: 20px;
  }

  .button-container select,
  .button-container button {
      background-color: #153B5F;
      color: #fff;
      padding: 10px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
  }

  .button-container select {
      margin-right: 10px;
  }

  .button-container button {
      margin-right: 10px;
  }

  .button-container button:hover {
      background-color: #FF9D1E; /* Hover color */
  }
</style>
    <!-- Main Content -->
    <div class="content">
      <!-- Navbar -->
      <nav>
          <i class='bx bx-menu'></i>
          <form action="#">
              <div class="form-input">
                  <input type="search" placeholder="Search...">
                  <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
              </div>
          </form>

      </nav>

      <!-- End of Navbar -->

      <livewire:customer-segmentation-table />

</div>
@endsection