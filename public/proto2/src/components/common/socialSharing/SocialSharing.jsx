import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faShareAlt, faEnvelope } from '@fortawesome/free-solid-svg-icons';
import { faFacebookF, faLinkedin } from '@fortawesome/free-brands-svg-icons';
import './socialSharing.scss';

const SocialSharing = () => {
  const handleShare = (platform) => {
    const url = window.location.href;
    const title = document.title;

    switch(platform) {
      case 'facebook':
        window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`, '_blank', 'width=600,height=400');
        break;
      case 'linkedin':
        window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`, '_blank', 'width=600,height=400');
        break;
      case 'email':
        window.location.href = `mailto:?subject=${encodeURIComponent(title)}&body=${encodeURIComponent(url)}`;
        break;
      default:
        break;
    }
  };

  return (
    <div className="social_box">
      <div id="share">
        <FontAwesomeIcon icon={faShareAlt} />
      </div>
      <div className="social_circle">
        <div className="social">
          <a href="#" onClick={(e) => { e.preventDefault(); handleShare('facebook'); }}>
            <FontAwesomeIcon icon={faFacebookF} />
          </a>
        </div>
        <div className="social">
          <a href="#" onClick={(e) => { e.preventDefault(); handleShare('linkedin'); }}>
            <FontAwesomeIcon icon={faLinkedin} />
          </a>
        </div>
        <div className="social">
          <a href="#" onClick={(e) => { e.preventDefault(); handleShare('email'); }}>
            <FontAwesomeIcon icon={faEnvelope} />
          </a>
        </div>
      </div>
    </div>
  );
};

export default SocialSharing;
