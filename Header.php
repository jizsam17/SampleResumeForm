<html>

<head>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="./Form1.css">
</head>

<body>

  <style>
    <?php include "Form1.css"?>
    tbody,
    td,
    tfoot,
    th,
    thead,
    tr
    {
    border-color:
    inherit;
    border-style:
    solid;
    border-width:
    2px;
    padding-right:
    30px;
    padding-left:
    30px;
    padding-top:1%;
    padding-bottom:1%;
    }
  </style>

  <div class="containerRow">
    <div class="row">
      <div class="col-3 dashboard" style="padding: 10px">
        <h2>DashBoard</h2>
        <div class="row" style="padding: 5px">
          <button type="button" class="btn btn-outline-primary" onclick="load_view()">Home</button>
        </div>
      </div>