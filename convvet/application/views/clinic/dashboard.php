<!-- Listagem de Pets -->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Client - CONVVET</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/navbar.css">


</head>

<body class="home">

<div class="menu">
      <img id="logo" class="logo-image" src="../assets/convvet.png" alt="Logo">
  </div>


    <div class="container">
    <div class="container-all">
    <div class="grid-container">
        <a href="/clinic_dashboard/pending_appointments">
                <div class="grid-item">AGENDAMENTOS</div>
        </a>
            <a href="/clinic_dashboard/view_pets">
                <div class="grid-item">Ver Pets</div>
            </a>
    </div>
        <div class="emergencia">
            <a href="clinic_dashboard/view_emergencies"><div style="width: 420px;" class="grid-item">EMERGÊNCIA</div></a>
        </div>
        <div class="archive">
            <a href="agendamento-online.html">
                <div class="grid-item-old">arquvios de agendamento</div>
            </a>
            <a href="clinic_dashboard/archived_emergencies">
                <div class="grid-item-old">arquvios de emergencia</div>
            </a>

            </div>
    </div> 
</div>
<script src="../js/navbar.js"></script>
</body>

</html>