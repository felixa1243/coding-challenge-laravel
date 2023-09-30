How to run? <br/>

<ol>
    <li>Install all required package by running composer install</li>
    <li>Run the project with php -S localhost:5000 -t public</li>
</ol>
<h2>Endpoint</h2>
<ul>
    <li>1.[POST] find the max: /api/max</li>
    <li>2.[POST] is a number prime number: /api/prime</li>
    <li>3.[POST] sort a word: /api/sort</li>
</ul>
<h2>Request example</h2>
<ul>
    <li>
      <h2>/api/max</h2>
      <p>
        {
            "numbers": [3, 6, 1, 8, 2]
        }
      </p>
    </li>
    <li>
      <h2>/api/prime</h2>
      <p>
        {
            "number": 7
        }
      </p>
    </li>
    <li>
      <h2>/api/sort</h2>
      <p>
        {
            "word": "openai"
        }
      </p>
    </li>
</ul>
