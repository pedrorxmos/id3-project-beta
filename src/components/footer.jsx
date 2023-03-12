import {ReactComponent as Logo} from '../assets/favicon.svg';

import {ReactComponent as InstagramIcon} from '../assets/icons/instagram.svg'
import {ReactComponent as TwitterIcon} from '../assets/icons/twitter.svg'
import {ReactComponent as TiktokIcon} from '../assets/icons/tiktok.svg'
import {ReactComponent as PinterestIcon} from '../assets/icons/pinterest.svg'
import {ReactComponent as YoutubeIcon} from '../assets/icons/youtube.svg'
import {ReactComponent as FacebookIcon} from '../assets/icons/facebook.svg'

export const Footer = ({type}) => {

  return (
    <>
      <footer>
				<div className="footer-group">
					<div className="footer-info">
						<div className="footer-newsletter">
							<h3 className="newsletter-title">
								Start being eyeconic
							</h3>
							<p>
								Subscribe to our newsletter and be the first one to know product launches  and exclusive offers!
							</p>
							<div className="newsletter-input">
								<input type="email" name="newsletter-email" id="newsletter-email" placeholder='Enter your email*' />
							</div>
							<p className='newsletter-disclaimer'>
								* By signing to our newsletter you are agreeing to receive varying number of marketing emails, and by extend you are agreeing to our <a href="#terms-and-conditions">Terms & Conditions</a>  and <a href="#terms-and-conditions">Privacy Policy</a> .
							</p>
						</div>
						<div className="footer-socialmedia">
              <Logo />
							<h3 className="socialmedia-title">
								Follow eyecon beauty everywhere
							</h3>
              <div className="socialmedia-links">
                <a href="https://www.instagram.com/" target="_blank">
                  <InstagramIcon/>
                </a>
                <a href="https://www.twitter.com/" target="_blank">
                  <TwitterIcon/>
                </a>
                <a href="https://www.tiktok.com/" target="_blank">
                  <TiktokIcon/>
                </a>
                <a href="https://www.pinterest.com/" target="_blank">
                  <PinterestIcon/>
                </a>
                <a href="https://www.youtube.com/" target="_blank">
                  <YoutubeIcon/>
                </a>
                <a href="https://www.facebook.com/" target="_blank">
                  <FacebookIcon/>
                </a>
              </div>
						</div>
					</div>
					<div className="footer-nav">
						<div className="footer-col">
							<ul className="nav-group">
								<li className="nav-item">
									Shop
								</li>
								<li className="nav-item">
                  Singular Shadows
                </li>
								<li className="nav-item">
                  Eyeshadow palettes
                </li>
							</ul>

							<ul className="nav-group">
								<li className="nav-item">
									Help
								</li>
								<li className="nav-item">Contact Us</li>
								<li className="nav-item">F.A.Q</li>
							</ul>
						</div>

            <div className="footer-col">

							<ul className="nav-group">
								<li className="nav-item">
									Company
								</li>
								<li className="nav-item">About us</li>
								<li className="nav-item">Sustainability</li>
							</ul>

              <ul className="nav-group">
								<li className="nav-item">
									Legal
								</li>
								<li className="nav-item">Terms & Conditions</li>
								<li className="nav-item">Privacy Policy</li>
                <li className="nav-item">Cookies Policy</li>
                <li className="nav-item">Return Policy</li>
							</ul>
						</div>
					</div>

				</div>
				<div className="footer-copyright">
          © 2023 Eyecon Beauty. All rights reserved
        </div>
			</footer>
    </>
  )
}