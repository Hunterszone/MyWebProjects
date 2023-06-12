import styles from './Button.module.css';

function Button(props) {
    return (
        <button className={styles.tfbutton} type='submit'>{props.children}</button>
    );
}

export default Button;