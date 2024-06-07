const firebaseConfig = {
    apiKey: "AIzaSyDetbjZjEa-YhC22CUtdCvb1RorDFdcEbY",
    authDomain: "daily-grind-e3f50.firebaseapp.com",
    databaseURL: "https://daily-grind-e3f50-default-rtdb.firebaseio.com",
    projectId: "daily-grind-e3f50",
    storageBucket: "daily-grind-e3f50.appspot.com",
    messagingSenderId: "855509648857",
    appId: "1:855509648857:web:7b85e3e6ba957af09a45c8"
  };

  firebase.initializeApp(firebaseConfig);

  const logoutBtn = document.getElementById('logoutBtn');

  logoutBtn.addEventListener('click', () => {
    firebase.auth().signOut()
      .then(() => {
        // Redirect to the login page after logout
        window.location.href = 'login.php';
      })
      .catch((error) => {
        console.error('Logout error:', error);
      });
  });