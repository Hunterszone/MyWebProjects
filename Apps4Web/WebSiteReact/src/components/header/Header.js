import styles from './Header.module.css';

function Header(props) {
    return (
        <div className={styles.header}>
            <h1 className={styles.pulsate}>
                <span className={styles.span}>Web</span> Programming <span className={styles.span}>World</span>
            </h1>
            <h2 className={styles.headerSec}>
                Online school <span className={styles.span}>for</span> web development
                <span className={styles.span}> and</span> web design
            </h2>
        </div>
    );
}

export default Header;