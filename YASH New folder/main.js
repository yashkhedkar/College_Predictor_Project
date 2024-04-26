// Define some sample data for colleges and their acceptance criteria
const colleges = [
    { name: "Harvard University", cutoff: 95 },
    { name: "Stanford University", cutoff: 90 },
    { name: "Massachusetts Institute of Technology (MIT)", cutoff: 85 },
    { name: "University of California, Berkeley", cutoff: 80 }
  ];
  
  // Function to predict colleges based on score
  function predictColleges(score) {
    const predictedColleges = [];
    for (let college of colleges) {
      if (score >= college.cutoff) {
        predictedColleges.push(college.name);
      }
    }
    return predictedColleges;
  }
  
  // Function to handle form submission
  function onSubmit() {
    const scoreInput = document.getElementById("score").value;
    const score = parseFloat(scoreInput);
    if (isNaN(score)) {
      alert("Please enter a valid score.");
      return;
    }
    
    const predictedColleges = predictColleges(score);
    if (predictedColleges.length === 0) {
      alert("Sorry, no colleges found for your score.");
    } else {
      alert("Predicted colleges for your score: " + predictedColleges.join(", "));
    }
  }
  