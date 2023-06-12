import styles from './SearchBar.module.css';
import Form from './Form';
import Button from './Button';
import { useState } from 'react';

function SearchBar() {
    const [field, setField] = useState('');

    function formSubmissionHandler(e) {
        e.preventDefault();
        setField(e.target.value);
        console.log(e.target.value);
    }

    return (
        <div className={styles.container}>
            <div className={styles.tfheader}>
                <Form method={'GET'}>
                    <input
                        className={styles.input}
                        type='search'
                        name='q'
                        id='gsearch'
                        onChange={formSubmissionHandler}
                        placeholder='Google results'
                        value={field}
                    />
                    <Button>Search</Button>
                    <div className={styles.bing}>
                        <input  type="checkbox" name="sitesearch" value="bing.com" unchecked />Bing results
                    </div>
                </Form>

            </div>
        </div>
    );
}

export default SearchBar;