import styles from './Dropdowns.module.css';
import { Link } from 'react-router-dom';


function Dropdowns(props) {



    return (
        <>
            <div className={styles.container}>
                <div className={styles.dropdown}>
                    <Link to='/signup'><i className='fa fa-user-plus'> Sign up</i></Link>
                </div>
                <div className={styles.dropdown}>
                    <a><i className='fa fa-sign-in'> Login</i></a>
                    <div className={styles['dropdown-content']}>
                        <button type="button" id="qr-auth" style={{ cursor: 'pointer' }} value="qrCode">2FA with QR code</button>
                        <button type="button" id="sms-auth" style={{ cursor: 'pointer' }} value="smsCode">2FA with SMS code</button>
                    </div>
                </div>
                <div className={styles.dropdown}>
                    <a><i className="fa fa-book"></i> Articles</a>
                    <div className={styles['dropdown-content']}>
                        <button type="button" style={{ cursor: 'pointer' }} value="HTML">HTML</button>
                        <button type="button" style={{ cursor: 'pointer' }} value="CSS">CSS</button>
                        <button type="button" style={{ cursor: 'pointer' }} value="JS">JS</button>
                        <button type="button" style={{ cursor: 'pointer' }} value="PHP">PHP</button>
                    </div>
                </div>
                <div className={styles.dropdown}>
                    <a ><i className="fa fa-pencil"></i> Contact</a>
                    <div className={styles['dropdown-content']}>
                        <button type="button" style={{ cursor: 'pointer' }} value="Feedback">Feedback</button>
                        <button type="button" style={{ cursor: 'pointer' }} value="Forum">Forum</button>
                    </div>
                </div>
            </div>
        </>
    );

}

export default Dropdowns;