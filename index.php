<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Circle Calculator</title>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Circle Calculator</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--6-col">
            <form action="/calculate" method="post">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="number" id="diameter" name="diameter" required>
                <label class="mdl-textfield__label" for="diameter">Diameter</label>
              </div>
              <br>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Calculate</button>
            </form>
            {% if error %}
              <br>
              <div class="mdl-color-text--red">{{ error }}</div>
            {% endif %}
          </div>
          <div class="mdl-cell mdl-cell--6-col">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
              <thead>
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">Result</th>
                  <th class="mdl-data-table__cell--non-numeric">Value</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Area</td>
                  <td>{{ area }}</td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Circumference</td>
                  <td>{{ circumference }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
