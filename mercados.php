<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./styles/global.css" />
    <link rel="stylesheet" type="text/css" href="./styles/mercados.css" />
    <title>Crypto Pigeon Market</title>
  </head>
  <body>
    <header>
      <a href="index.php">
        <h1>CRYPTO PIGEON MARKET</h1>
        <img src="./images/logo.png" alt="Crypto Pigeon Market Logo" class="logo-image">
        <img src="./images/interface.png" alt="Crypto Pigeon Market Options" class="interface">
      </a>
      <div id="options">
        <a href="index.php">Inicio</a>
        <a href="mercados.php">Mercados</a>
        <a href="nosotros.php">Nosotros</a>
        <a href="soporte.php">Soporte</a>
      </div>
      <div id="userOptions">
        <a href="login.php"><button id="btnLogging">Inicia Sesion</button></a>
        <a href="register.php"><button id="btnRegister">Registrate</button></a>
      </div>
    </header> 
    <section class="support-header">
      <h2>Mercados</h2>
    </section>

    <div class="crypto-section">
      <section id="bitcoin">
        <section class ="info-section">
          <section class="crypto-title">
            <h2>Bitcoin (BTC)</h2>
            <img src="./images/bitcoin_logo.png" alt="Bitcoin Logo" class="crypto-image">
          </section>
          <section class="crypto-info">
            <p><strong>Fecha de creación:</strong> 2009</p>
            <p><strong>Creador:</strong> Satoshi Nakamoto</p>
            <p>Bitcoin es la primera criptomoneda creada y es conocida como el oro digital. Es una moneda descentralizada y utiliza la tecnología blockchain para asegurar y verificar transacciones.</p>
            <p><strong>Características clave:</strong></p>
            <ul>
                <li>Oferta limitada a 21 millones de BTC</li>
                <li>Descentralización</li>
                <li>Seguridad a través del proof-of-work</li>
            </ul>
          </section>
        </section>
        <section class="crypto-stats">
          <table>
            <tr>
                <th>Price</th>
                <td>$70,179.73</td>
            </tr>
            <tr>
                <th>1h%</th>
                <td class="positive">0.82%</td>
            </tr>
            <tr>
                <th>24h%</th>
                <td class="negative">-0.23%</td>
            </tr>
            <tr>
                <th>7d%</th>
                <td class="positive">8.19%</td>
            </tr>
            <tr>
                <th>Market Cap</th>
                <td>$1,382,670,329,905</td>
            </tr>
            <tr>
                <th>Last 7 Days</th>
                <td><img src="./images/graphic.png" alt="Last 7 Days Graph" class="crypto-graph"></td>
            </tr>
        </table>
      </section>
        
      </section>
      <section id="ethereum">
        <section class ="info-section">
          <section class="crypto-title">
            <h2>Ethereum (ETH)</h2>
            <img src="./images/ethereum_logo.png" alt="Ethereum Logo" class="crypto-image">
          </section>
          <section class="crypto-info">
            <p><strong>Fecha de creación:</strong> 2015</p>
            <p><strong>Creador:</strong> Vitalik Buterin</p>
            <p>Ethereum es una plataforma descentralizada que permite la creación de contratos inteligentes y aplicaciones descentralizadas (dApps). Su criptomoneda nativa es el Ether (ETH).</p>
            <p><strong>Características clave:</strong></p>
            <ul>
                <li>Contratos inteligentes</li>
                <li>dApps</li>
                <li>Paso a proof-of-stake (Ethereum 2.0)</li>
            </ul>
          </section>
        </section>
        <section class="crypto-stats">
          <table>
              <tr>
                  <th>Price</th>
                  <td>$3,763.35</td>
              </tr>
              <tr>
                  <th>1h%</th>
                  <td class="positive">0.98%</td>
              </tr>
              <tr>
                  <th>24h%</th>
                  <td class="negative">-0.64%</td>
              </tr>
              <tr>
                  <th>7d%</th>
                  <td class="positive">26.34%</td>
              </tr>
              <tr>
                  <th>Market Cap</th>
                  <td>$452,085,901,703</td>
              </tr>
              <tr>
                  <th>Last 7 Days</th>
                  <td><img src="./images/graphic.png" alt="Bitcoin Price Graph" class="crypto-graph"></td>
              </tr>
          </table>
      </section>
        
      </section>
      <section id="litecoin">
        <section class ="info-section">
          <section class="crypto-title">
            <h2>Litecoin (LTC)</h2>
            <img src="./images/litecoin_logo.png" alt="Litecoin Logo" class="crypto-image">
          </section>
          <section class="crypto-info">
            <p><strong>Fecha de creación:</strong> 2011</p>
            <p><strong>Creador:</strong> Charlie Lee</p>
            <p>Litecoin es una criptomoneda que fue creada como una versión más ligera de Bitcoin. Se caracteriza por tener tiempos de confirmación más rápidos y una eficiencia de almacenamiento mejorada.</p>
            <p><strong>Características clave:</strong></p>
            <ul>
                <li>Tiempos de bloque de 2.5 minutos</li>
                <li>Scrypt como algoritmo de hash</li>
                <li>Mayor suministro máximo de 84 millones de LTC</li>
            </ul>
          </section>
        </section>
        <section class="crypto-stats">
          <table>
              <tr>
                  <th>Price</th>
                  <td>$0.9999</td>
              </tr>
              <tr>
                  <th>1h%</th>
                  <td class="positive">0.00%</td>
              </tr>
              <tr>
                  <th>24h%</th>
                  <td class="positive">0.00%</td>
              </tr>
              <tr>
                  <th>7d%</th>
                  <td class="negative">-0.04%</td>
              </tr>
              <tr>
                  <th>Market Cap</th>
                  <td>$111,350,113,639</td>
              </tr>
              <tr>
                  <th>Last 7 Days</th>
                  <td><img src="./images/graphic.png" alt="Bitcoin Price Graph" class="crypto-graph"></td>
              </tr>
          </table>
      </section>
        
      </section>
      <section id="dogecoin">
        <section class ="info-section">
          <section class="crypto-title">
            <h2>Dogecoin (DOGE)</h2>
            <img src="./images/dogecoin_logo.png" alt="Dogecoin Logo" class="crypto-image">
          </section>
          <section class="crypto-info">
            <p><strong>Fecha de creación:</strong> 2013</p>
            <p><strong>Creadores:</strong> Billy Markus y Jackson Palmer</p>
            <p>Dogecoin es una criptomoneda basada en el popular meme "Doge". Aunque empezó como una broma, ha ganado una gran comunidad y es utilizada principalmente para propinas y donaciones.</p>
            <p><strong>Características clave:</strong></p>
            <ul>
                <li>Bajas tarifas de transacción</li>
                <li>Alta oferta ilimitada</li>
                <li>Comunidad activa y fuerte</li>
            </ul>
          </section>
        </section>
        <section class="crypto-stats">
          <table>
              <tr>
                  <th>Price</th>
                  <td>$0.1695</td>
              </tr>
              <tr>
                  <th>1h%</th>
                  <td class="positive">2.72%</td>
              </tr>
              <tr>
                  <th>24h%</th>
                  <td class="positive">1.00%</td>
              </tr>
              <tr>
                  <th>7d%</th>
                  <td class="positive">11.23%</td>
              </tr>
              <tr>
                  <th>Market Cap</th>
                  <td>$24,467,926,942</td>
              </tr>
              <tr>
                  <th>Last 7 Days</th>
                  <td><img src="./images/graphic.png" alt="Bitcoin Price Graph" class="crypto-graph"></td>
              </tr>
          </table>
        </section>
      </section>
      <section id="usdt">
        <section class ="info-section">
          <section class="crypto-title">
            <h2>Tether (USDT)</h2>
            <img src="./images/tether_logo.png" alt="Tether Logo" class="crypto-image">
          </section>
          <section class="crypto-info">
            <p><strong>Fecha de creación:</strong> 2014</p>
            <p><strong>Creadores:</strong> Brock Pierce, Reeve Collins, y Craig Sellars</p>
            <p>Tether (USDT) es una criptomoneda stablecoin que está vinculada al valor del dólar estadounidense. Está diseñada para mantener un valor estable y es utilizada frecuentemente en transacciones y como refugio durante la volatilidad del mercado.</p>
            <p><strong>Características clave:</strong></p>
            <ul>
                <li>Valor vinculado al dólar estadounidense</li>
                <li>Alto volumen de transacciones</li>
                <li>Utilizada como medio de intercambio y refugio de valor</li>
            </ul>
          </section>
        </section>
        <section class="crypto-stats">
          <table>
              <tr>
                  <th>Price</th>
                  <td>$86.16</td>
              </tr>
              <tr>
                  <th>1h%</th>
                  <td class="positive">1.03%</td>
              </tr>
              <tr>
                  <th>24h%</th>
                  <td class="negative">-2.14%</td>
              </tr>
              <tr>
                  <th>7d%</th>
                  <td class="positive">7.17%</td>
              </tr>
              <tr>
                  <th>Market Cap</th>
                  <td>$6,507,712,366</td>
              </tr>
              <tr>
                  <th>Last 7 Days</th>
                  <td><img src="./images/graphic.png" alt="Bitcoin Price Graph" class="crypto-graph"></td>
              </tr>
          </table>
      </section>
      </section>
    </div>
    <script src="main.js"></script>
  </body>
  <footer id="main-footer">
    <table style="width: 100%">
      <tr class="footer-elements">
        <td class="footer-column">
          <div>
            <h2>PIGEON CRYPTO MARKET</h2>
            <p>
              PIGEON CRYPTO MARKET, el principal mercado, hace que comprar y
              vender bitcoins en efectivo, con tarjeta o mediante
              transferencia bancaria sea facilísimo.
            </p>
            <p>
              Regístrate para recibir las últimas noticias, descuentos y mucho
              más sobre las criptomonedas.
            </p>
            <input type="email" placeholder="correo" id = "footer-email" onkeydown="footer(event)"/>
            <p class="footer-info">
              © 2024 Lorena Kim - Gary Sanchez | Taller Web
            </p>
          </div>
        </td>
        <td class="footer-column">
          <nav>
            <a href="./mercados.php">Mercado</a><br />
            <a href="./nosotros.php">Nosotros</a><br />
            <a href="./soporte.php">Soporte</a><br />
            <a href="./noticias.php">Noticias</a><br />
          </nav>
        </td>
        <td class="footer-column">
          <nav>
          <a href="./privacity.php">Politica de Privacidad</a><br />
          <a href="./terms.php">Terminos del servicio</a><br />
          <a href="./reclamos.php">Libro de reclamaciones</a><br />
          <a href="./lista-reclamos.php">Historial de reclamos</a><br />
          <a href="./entregable4.php">Entregable 4</a><br />
          </nav>
        </td>
      </tr>
    </table>
  </footer>
</html>
