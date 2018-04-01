GLV Race Report Generator
==

This little app uses what's known as a <a href="https://en.wikipedia.org/wiki/Markov_chain#Markov_text_generators" target="_blank">Markov Chain</a> to analyze a sample of text (in this case, GLV's race reports) and then generate phrases based on the frequency and probability of words in that text. If you're familiar with Reddit's <a href="https://reddit.com/r/SubredditSimulator">Subreddit Simulator</a>, this is very similar.
The results are frighteningly accurate, especially in reproducing Sam's iconic writing style. The markov chain iterates through the sample words and builds a probability map of words that are likely to follow that word, and outputs the phrases based on that probablity. In Sam's case, most words are followed by "F**K.", which is why it's easy to capture the essence of his writing style. 

ENJOY!


Try it out <a href="https://adambernste.in/reportgenerator#generatedText" target="_blank">here</a>

