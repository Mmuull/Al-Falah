// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/12.4.0/firebase-app.js";
import { getDatabase } from "https://www.gstatic.com/firebasejs/12.4.0/firebase-database.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apikey: "aizasycnxo8b__xxkgw8lc4wkfna3o6miooxc3e",
  authdomain: "ecommerce-3c336.firebaseapp.com",
  databaseurl: "https://ecommerce-3c336-default-rtdb.firebaseio.com",
  projectid: "ecommerce-3c336",
  storagebucket: "ecommerce-3c336.firebasestorage.app",
  messagingSenderId: "11358124317",
  appId: "1:11358124317:web:1a1611c3bd525d56bc49f4",
  measurementId: "G-N9GXX8DSXQ" 
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const db = getDatabase(app);

// Async function to get data
async function getData(key) {
  const dbRef = ref(db);
  
  try {
    const snapshot = await get(child(dbRef, `Pembeli/${key}`));
    
    if (snapshot.exists()) {
      console.log("Data Pembeli", snapshot.val());
      return snapshot.val(); // return data if needed
    } else {
      console.log("No data available");
      return null;
    }
  } catch (error) {
    console.error("Error getting data:", error);
    throw error; // rethrow if you want to handle it outside
  }
}

// Example usage:
getData("B101")
  .then((data) => {
    if (data) {
      console.log("Fetched user:", data);
    }
  })
  .catch((err) => {
    console.error("Failed to fetch user:", err);
  });
