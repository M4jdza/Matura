<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:template match="/">
    <html>

      <head>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/table_style.css" />
      </head>

      <body>

        <header>
          <div class="bibl">Biblioketa</div>

          <nav>
            <ul>
              <a href="index.php">
                <li>Početna</li>
              </a>
              <a href="biblioteka.xml">
                <li>Pregled</li>
              </a>
              <a href="autor.php">
                <li>O autoru</li>
              </a>
              <a href="uputstvo.php">
                <li>Uputstvo</li>
              </a>
            </ul>
          </nav>

        </header>
        <main>
          <table>
            <tr>
              <th>ISBN</th>
              <th>Naslov</th>
              <th>Stanje</th>
              <th>Citano</th>
            </tr>
            <xsl:for-each select="biblioteka/knjiga">
              <xsl:sort select="citano" data-type="number" order="descending" />
              <tr>
                <td>
                  <xsl:value-of select="@ISBN" />
                </td>
                <td>
                  <xsl:value-of select="naslov" />
                </td>
                <td>
                  <xsl:value-of select="stanje" />
                </td>
                <td>
                  <xsl:value-of select="citano" />
                </td>
              </tr>
            </xsl:for-each>
          </table>
        </main>

        <footer> © Gradska biblioteka</footer>
      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>