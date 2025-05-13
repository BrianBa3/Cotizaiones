<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cotización 12535</title>

  <style>
    @page {
      margin: 1cm;
    }


    body {
      font-family: Arial, sans-serif;
      font-size: 12px;
      margin: 0;
      padding: 0;
      color: #000;
      position: relative;
      display: flex;
      justify-content: center;
    }

    .container {
      width: 19.4cm;  /* Tamaño de hoja A4 en cm */
      max-width: 21cm;
      min-width: 14.8cm;  /* Ancho mínimo de una hoja A4 */
      margin: 0 auto;
      padding: 10px;
      box-sizing: border-box;
      
    }

    .marca-agua {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 0;
      opacity: 0.15;
      width: 500px;
      height: auto;
    }

    .marca-agua img {
      width: 100%;
      height: auto;
    }

    .barra-superior-azul {
      background-color: #c5dff5;
      height: 20px;
      width: 100%;
    }

    .barra-inferior {
      background-color: #c5dff5;
      color: #000;
      font-size: 11px;
      position: fixed;
      bottom: 0;
      width: 19.4cm;
      display: flex;
      justify-content: space-between;
      padding: 5px 10px;
      box-sizing: border-box;
      height: 20px;
    }

    
    
    .barra-inferior_tres {
      background-color: #c5dff5;
      font-size: 13px;
      position: fixed;
      bottom: 20px; /* esta es la clave: ubica justo encima */
      width: 19.4cm;
      display: flex;
      justify-content: space-between;
      padding: 5px 20px;
      box-sizing: border-box;
      height: 30px; /* igual que la otra barra, o lo que necesites */
      z-index: 11; /* encima de .barra-inferior si se cruzan */
      border-bottom: 2px solid black; /* línea negra entre las barras */
    }

    .barra-inferior_dos {
      font-size: 11px;
      position: fixed;
      bottom: 60px; /* esta es la clave: ubica justo encima */
      width: 19.4cm;
      display: flex;
      justify-content: space-between;
      padding: 5px 20px;
      box-sizing: border-box;
      height: 30px; /* igual que la otra barra, o lo que necesites */
      z-index: 11; /* encima de .barra-inferior si se cruzan */
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 30px 5px;
      position: relative;
      z-index: 1;
    }

    .logo img {
      height: 60px;
    }

    .empresa {
      text-align: right;
      font-size: 14px;
    }

    .title {
      text-align: right;
      font-weight: bold;
      font-size: 16px;
      padding: 10px 30px 0;
      position: relative;
      z-index: 1;
    }

    .info-table,
    .main-table,
    .summary-table {
      position: relative;
      z-index: 1;
    }

    .info-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 5px;
      font-size: 12px;
    }

    .info-table td {
      padding: 4px 8px;
      vertical-align: top;
      line-height: 1.6;
    }

    .info-table td:first-child {
      width: 50%;
    }

    .main-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
      font-size: 11px;
    }

    .main-table th, .main-table td {
      border: 1px solid #000;
      padding: 6px;
      text-align: left;
      border: none;
    }
    .main-table tr {
      border-bottom: 1px solid blue; /* Línea horizontal azul */
    }

    .main-table th {
      border-bottom: 2px solid blue; /* Línea horizontal más gruesa para el encabezado */
    }

    .summary-table {
      width: 100%;
      margin-top: 10px;
      font-size: 11px;
      border-collapse: collapse;
    }

    .summary-table td {
      padding: 4px 8px;
      text-align: right;
    }

    .summary-table tr td:first-child {
      width: 85%;
      text-align: right;
    }

    .notes {
      margin-top: 10px;
      font-size: 13px;
      padding: -0 13px;
      position: relative;
      z-index: 1;
      font-weight: bold;
      line-height: 0.8;
    }
  </style>
  
</head>
<body>
  <div class="container">

    <!-- Marca de agua -->
    <div class="marca-agua">
      <img src="eagle-logo.png" alt="Marca de agua">
    </div>

    <div class="header">
      <div class="logo">
        <img src="eagle-logo.png" alt="EAGLE IMPORTACION">
      </div>
      <div class="empresa">
        <strong>EIM951002R19</strong><br>
        CALZADA LAZARO CARDENAS 170<br>
        PARQUE INDUSTRIAL LAGUNERO GOMEZ PALACIO, DURANGO, MEXICO
      </div>
    </div>

    <!-- Franja azul clara debajo de la dirección -->
    <div class="barra-superior-azul"></div>

    <div class="title">
      COTIZACIÓN 12535
    </div>

    <table class="info-table">
      <tr>
        <td>
          <u><strong>Movimiento:</strong></u> 01E00012535<br>
          <u><strong>Cliente #:</strong></u> 00487
          &nbsp;&nbsp;
          <u><strong>RFC:</strong></u> OMA080404DR4<br>
          <u><strong>Nombre:</strong></u> OPERADORA MACROBUS<br>
          <u><strong>Dirección:</strong></u> FRAY ANGELICO N° 4720<br>
          Miravalle, Guadalajara, JALISCO, CP 44990<br>
          <u><strong>Observaciones:</strong></u> FRAY
        </td>
        <td>
          <u><strong>Fecha:</strong></u> 22/04/2025 12:00:00<br>
          <strong>CONTADO</strong>
           &nbsp;&nbsp;
          <u><strong>Días:</strong></u> 0<br>
          <u><strong>Concepto:</strong></u>GDL <br>
          <u><strong>Vendedor:</strong></u> V158<br>
          ARMANDO SEBASTIAN VERGARA RODRIGUEZ<br>
          <u><strong>OC:</strong></u>
        </td>
      </tr>
    </table>

    <table class="main-table">
      <thead>
        <tr>
          <th>Artículo</th>
          <th>Descripción</th>
          <th>U.M.</th>
          <th>Cant.</th>
          <th>Precio</th>
          <th>Dscto.</th>
          <th>Importe</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>227811-982</td>
          <td>CHV DELO ELC AFC PREMIX 50/50</td>
          <td>BARRIL</td>
          <td>1.00</td>
          <td>$11,778.30</td>
          <td>$0.00</td>
          <td>$11,778.30</td>
        </tr>
        <tr>
          <td>P-000001</td>
          <td>Promocion Gorra</td>
          <td>PIEZA</td>
          <td>1.00</td>
          <td>$0.00</td>
          <td>$0.00</td>
          <td>$0.00</td>
        </tr>
      </tbody>
    </table>

    <table class="summary-table">
      <tr>
        <td><u><strong>Subtotal:</strong></u></td>
        <td>$11,778.30</td>
      </tr>
      <tr>
        <td><u><strong>Impuestos:</strong></u></td>
        <td>$1,884.53</td>
      </tr>
      <tr>
        <td><u><strong>Descuento:</strong></u></td>
        <td>$0.00</td>
      </tr>
      <tr>
        <td><u><strong>Total:</strong></u></td>
        <td><strong>$13,662.83</strong></td>
      </tr>
    </table>

    <div class="notes" >
      <p>*Precios de contado en moneda ( Pesos )</p>
      <p>*Sujetos a cambio sin previo aviso</p>
      <p>*Tiempo de entrega Sujeto a Disponibilidad <br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      0.00 Días Hábiles</p>
      <br>
     </div>
    

    <!-- Franja inferior -->


    <div class="barra-inferior_dos">
      <p>* Esta Cotización ampara lo arriba descrito con una caducidad de 8 días posteriores a su fecha generada</p>
    </div>
  
    <div class="barra-inferior_tres">
      <strong>Cotización de Ventas</strong>
    </div>

    <div class="barra-inferior">
      <div id="fecha"></div>
      <div>Página 1 de 1</div>
      <div id="hora"></div>
    </div>

        
  </div>


    <script>
    const ahora = new Date();
    const dia = ahora.getDate().toString().padStart(2, '0');
    const mes = (ahora.getMonth() + 1).toString().padStart(2, '0');
    const anio = ahora.getFullYear();

    const fechaFormateada = `${dia}/${mes}/${anio}`;
    document.getElementById("fecha").textContent = fechaFormateada;
    </script>

    <script>
    function actualizarHora() {
    const ahora = new Date();
    let horas = ahora.getHours();
    const minutos = ahora.getMinutes();
    const segundos = ahora.getSeconds();
    const esPM = horas >= 12;

    // Convertir a formato 12 horas
    horas = horas % 12;
    horas = horas ? horas : 12; // 0 se convierte en 12

    // Formatear con ceros a la izquierda
    const formatoHora = 
      `${horas.toString().padStart(2, '0')}:` +
      `${minutos.toString().padStart(2, '0')}:` +
      `${segundos.toString().padStart(2, '0')} ` +
      `${esPM ? 'p.m.' : 'a.m.'}`;

    document.getElementById("hora").textContent = formatoHora;
    }

    // Actualiza cada segundo
    actualizarHora();
    setInterval(actualizarHora, 1000);
    </script>

</body>
</html>
