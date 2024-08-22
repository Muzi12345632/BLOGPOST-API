import React from 'react';

const Header = () => {
    return (
        <nav className="navbar navbar-expand-lg fixed-top" style={{ backgroundColor: '#007bff', width: 'auto' }}>
            <div className="container-fluid">
                <a className="navbar-brand text-white justify-content-evenly" href="#">MyWebsite</a>
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                </button>
                <div className="collapse navbar-collapse justify-content-center ali" id="navbarNav" style={{ marginLeft: 'auto', marginRight: 'auto' }}>
                    <ul className="navbar-nav">
                        <li className="nav-item">
                            <a className="nav-link text-white" href="#" style={{ transition: 'color 0.3s', padding: '10px' }}
                               onMouseEnter={(e) => e.target.style.color = '#ffdd57'}
                               onMouseLeave={(e) => e.target.style.color = 'white'}>Home</a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link text-white" href="#">About</a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link text-white" href="#">Contact</a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link text-white" href="#">Explore</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    );
}

export default Header;
