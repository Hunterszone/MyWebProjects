import styles from './Sidebar.module.css';
import { FaFacebook, FaTwitter, FaLinkedin } from 'react-icons/fa';

function SidebarRight() {
    return (
        <div className={styles['sidebar-right']}>
            <div className={styles.social}>
               
                    <a className={styles['sidebar-right-badge']} href="https://statuspage.freshping.io/55647-WebProgrammingWorld" target="_blank"><img src="https://statuspage.freshping.io/badge/2e3e4806-0a16-4fbb-96a9-5db655d9c699?0.5940733387587804" /></a>
                
                <a href='https://www.facebook.com/sharer.php?s=100&amp;p[title]=&amp;p[url]=&amp;&p[images][0]=' target='_blank' rel="noreferrer">
                    <FaFacebook className={styles.facebook} />
                </a>
                <a href='https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.example.com%2F&original_referer=.php?s=100&amp;p[title]=&amp;p[url]=&amp;&p[images][0]=' target='_blank' rel="noreferrer">
                    <FaTwitter className={styles.twitter} />
                </a>
                <a href='http://www.linkedin.com' target='_blank' rel="noreferrer">
                    <FaLinkedin className={styles.linkedin} />
                </a>

            </div>
        </div >
    );
}

export default SidebarRight;