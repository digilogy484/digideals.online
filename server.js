const express = require('express');
const path = require('path');
const app = express();
const PORT = process.env.PORT || 3000;

app.use(express.static(path.join(__dirname, 'public')));

// هيكلة 8 مجلدات
app.get('/', (req,res) => {
  res.send(`
    <h1>DigiDeals.online is Live</h1>
    <p>Running on Digilogy.online hosting</p>
    <p>Preview Link: /preview</p>
    <p>Status: Server OK - ${new Date().toISOString()}</p>
  `);
});

app.get('/health', (req,res) => res.json({status:'ok', host:'Digilogy.online', project:'digideals.online'}));

app.listen(PORT, () => console.log(`DigiDeals running on ${PORT}`));