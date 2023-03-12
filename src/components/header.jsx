import {Outlet} from 'react-router';
import { NavLink } from 'react-router-dom';

import {ReactComponent as Logo} from '../assets/favicon.svg';
import {ReactComponent as BagIcon} from '../assets/icons/bag.svg'
import {ReactComponent as AccountIcon} from '../assets/icons/account.svg'
import {ReactComponent as MenuIcon} from '../assets/icons/menu.svg'
import {ReactComponent as CloseIcon} from '../assets/icons/close.svg'
import {ReactComponent as FlagIcon} from '../assets/icons/flag.svg'


export const Header = () => {

  const toggleMenu = () => {
    document.querySelector('.navigation').classList.toggle('open');
    document.querySelector('.overlay').classList.toggle('hide');
    document.querySelector('.nav-actions').classList.toggle('open');
    document.querySelector('body').classList.toggle('overflow-hidden');
  }

  const closeMenu = () => {
    document.querySelector('.navigation').classList.remove('open');
    document.querySelector('.overlay').classList.add('hide');
    document.querySelector('.nav-actions').classList.remove('open');
    document.querySelector('body').classList.remove('overflow-hidden');
  }

	return (
		<>
			<header className='topbar'>
        <NavLink to={'./'} onClick={closeMenu} className="logo">
          <Logo />
          Eyecon Beauty
        </NavLink>

        <nav className="navigation">
          <ul className="nav-list">
            <li className="nav-item">
              <NavLink to={'shop'} onClick={closeMenu}>Shop</NavLink>
                <ul className="nav-sublist">
                  <li className="nav-subitem">
                    <NavLink to={'shop/singular'} onClick={closeMenu}>Singular Shadows</NavLink>
                  </li>
                  <li className="nav-subitem">
                    <NavLink to={'shop/palettes'} onClick={closeMenu}>Eyeshadow palettes</NavLink>
                  </li>
                </ul>
            </li>
            <li className="nav-item">
              <NavLink to={'about-us'} onClick={closeMenu}>About Us</NavLink>
            </li>
            <li className="nav-item">
              <NavLink to={'contact'} onClick={closeMenu}>Contact</NavLink>
            </li>
          </ul>

          <ul className="nav-list-actions">
            <li className="nav-item-action nav-account">
              <AccountIcon/> Account
            </li>
            <li className="nav-item-action nav-locale">
              <FlagIcon/> Locale
            </li>
          </ul>
        </nav>
					
					

          <div className="nav-actions">
            <button className="nav-action nav-bag">
              <BagIcon/>
            </button>
            <button className="nav-action nav-toggle" onClick={toggleMenu}>
              <MenuIcon className="burguer-menu-icon"/>
              <CloseIcon className="close-menu-icon"/>
            </button>
            <button className="nav-action nav-account">
              <AccountIcon/> Account
            </button>
            <a href="account" className="nav-action nav-locale">
              <FlagIcon/>
            </a>
            
          </div>
			</header>

      <div className="overlay hide" onClick={closeMenu}></div>

			<main>
				<Outlet />
			</main>
		</>
	);
};
