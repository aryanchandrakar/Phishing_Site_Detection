# Phishing_Site_Detection
IMPLEMENTATION, ANALYSIS AND DETECTION OF PHSIHING URLs USING MACHINE LEARNING, NEURAL NETWORK AND DATA SET MODELS 

With developing phishing techniques, machine learning is the weapon which has the ability to reduce this attack to a great extent. 
Using machine learning, we will train our model to the data set containing the features of the phishing
websites. We will then ask input in the form of URL and analyse through the different features of that website. 
We will then test this data point and display whether the URL is legitimate or malicious. A clear example can be seen below how a phishing attack works where you
can see the legitimate Instagram site on right while the spam phished site on the left which can be easily developed in the terminal using shell-phish commands.
We will then test this data point and display whether the URL is legitimate ormalicious. Features:
1. IP Address
2. URL length
3. @ symbol in URL
4. ‘//’ in URL
5. ‘-‘ in URL 6. Number of domains and subdomains
7. Use of HTTPS
8. Domain Registration Length and Request URL
9. HTML tags and anchor tag
10. SSL final state Other features are there as well.


Random forest algorithm 
is a supervised classification algorithm. As the namesuggest, this algorithm creates the forest with a number of trees.
In general, the more trees in the forest the more robust the forest looks like. In the same way in the random forest classifier, the higher the number of trees in
the forest gives the high accuracy results.

Neural network 
approach is being used as it increases the performance and even a small neural network gives good result and if a network is large results in even better results.

Decision Tree 
Decision tree concept is more to the rule based system. Given the training dataset with targets and features, the decision tree algorithm will come up with some set of rules. The same set rules can be used to perform the
prediction on the test dataset. 
Suppose you would like to predict that your daughter will like the newly released animation movie or not. To model the decision tree you will use the training dataset like the animated cartoon characters your daughter liked in the
past movies.
So once you pass the dataset with the target as your daughter will like the movie or not to the decision tree classifier. The decision tree will start building the rules with the characters your daughter like as nodes and the targets like or
not as the leaf nodes. By considering the path from the root node to the leaf node. You can get the rules.
The simple rule could be if some x character is playing the leading role then your daughter will like the movie. You can think few more rule based on this example.
Then to predict whether your daughter will like the movie or not. You just need to check the rules which are created by the decision tree to predict whether your daughter will like the newly released movie or not.
In decision tree algorithm calculating these nodes and forming the rules will happen using the information gain and gini index calculations.
In random forest algorithm, Instead of using information gain or gini index for calculating the root node, the process of finding the root node and splitting the feature nodes will happen randomly
