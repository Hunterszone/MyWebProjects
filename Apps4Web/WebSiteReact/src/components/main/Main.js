import Header from '../header/Header';
import SearchBar from '../search/SearchBar';
import Dropdowns from '../dropdowns/Dropdowns';
import Slider from '../slider/Slider';
import Sidebar from '../sidebar/Sidebar';
import FindLocation from '../sidebar/FindLocation';
import SidebarRight from '../sidebar/SidebarRight';
import { useState } from 'react';
import styles from '../../App.module.css';

function Main(props) {
    const [clicked, setClicked] = useState(false);
    function clickHandler() {
      if (!clicked) {
        setClicked(true);
      } else {
        setClicked(false);
      }
      console.log(clicked);
    }

    return <div className={styles.container}>
        <Header/>
        <SearchBar/>
        <Dropdowns/>
        <Slider/>
        <Sidebar onClick={clickHandler}/>
        {clicked && <FindLocation />}
        <SidebarRight/>
    </div>
}

export default Main;