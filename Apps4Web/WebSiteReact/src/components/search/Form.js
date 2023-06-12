import styles from './Form.module.css';

function Form(props) {
    return (
        <form className={styles.form} onSubmit={props.onSubmit} method={props.method} action={`http://www.google.com/search`} target='_blank'>{props.children}</form>
    );
}

export default Form;