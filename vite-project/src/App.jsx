import {useEffect, useState} from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import 'bootstrap/dist/css/bootstrap.min.css';
import Header from './Header';
import Loading from "./Loading.jsx";

function App() {
    const[loading, setLoading] = useState(true)



    useEffect(() => {
        // Simulate a delay to represent loading time
        const timer = setTimeout(() => {
            setLoading(false);
        }, 2000); // Adjust the time as needed

        return () => clearTimeout(timer);
    }, []);

    return (
        <div>
            {loading ? (
                <Loading/>
            ) : (
                <>
                    <Header/>
                    <div style={{marginTop: '60px'}}>
                        {/* Main content of your app */}
                        <h1>Welcome to My Website</h1>
                        <p>This is the main content of the page.</p>
                    </div>
                </>
            )}
        </div>
    );

}
export default App;
