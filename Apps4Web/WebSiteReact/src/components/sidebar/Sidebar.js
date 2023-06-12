import styles from './Sidebar.module.css';
import printIcon from '../../assets/print-icon.png';
import creative from '../../assets/creative-icon.png';
import feed from '../../assets/rss-feed-icon.png';
import marker from '../../assets/marker.png';

function Sidebar(props) {
   

    return (
        <>
            <div className={styles.sidebar}>
                <a href="javascript:window.print()"><img src={printIcon} alt="print this page" id="print-button" title="Print" /></a>
                <a rel="noreferrer" href="http://creativecommons.org/licenses/by/3.0/" target="_blank"><img src={creative} title="Creative Commons" alt='' /></a>
                <a href="http://www.smashingmagazine.com/feed/" target="_blank" rel="noreferrer"><img src={feed} alt="[Valid RSS]" title="RSS feeds" /></a>

                <a onClick={props.onClick}><img src={marker} alt="marker" title="Show Location" /></a>
                
            </div>

        </>
    );
}

export default Sidebar;