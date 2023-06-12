import styles from './Slider.module.css';
import { useState } from 'react';

function Slider() {
    const [iframe, setIframe] = useState('https://www.youtube.com/embed/hQAHSlTtcmY?enablejsapi=1');

    function frameHandler() {
        if (iframe === 'https://www.youtube.com/embed/hQAHSlTtcmY?enablejsapi=1') {
            setIframe('https://www.youtube.com/embed/dGcsHMXbSOA?enablejsapi=1');
        } else if(iframe === 'https://www.youtube.com/embed/dGcsHMXbSOA?enablejsapi=1') {
            setIframe('https://www.youtube.com/embed/hQAHSlTtcmY?enablejsapi=1')
        }
    }

    
    return (
        <div className={styles.videoSlider} id='slider-video'>
            <div className={styles.slide}>
                <iframe className={styles.video} id="ytplayer" type="text/html"  src={iframe} title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" loop={true} autoPlay={true} allowFullScreen></iframe>
            </div>
            <div className={styles['slide-arrow']}>
                <div className={styles['slide-arrow-left']} onClick={frameHandler} />
                <div className={styles['slide-arrow-right']} onClick={frameHandler} />
            </div>
        </div>
    );
}

export default Slider;