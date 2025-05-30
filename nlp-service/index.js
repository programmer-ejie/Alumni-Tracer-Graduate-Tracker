const express = require('express');
const bodyParser = require('body-parser');
const Sentiment = require('sentiment');
const cors = require('cors');

const app = express();
const sentiment = new Sentiment();

app.use(cors());
app.use(bodyParser.json());

app.post('/analyze', (req, res) => {
    const { text } = req.body;
    if (!text) return res.status(400).json({ error: 'No text provided' });
    const result = sentiment.analyze(text);
    res.json({ score: result.score, comparative: result.comparative });
});

const PORT = 5000;
app.listen(PORT, () => console.log(`NLP service running on port ${PORT}`));