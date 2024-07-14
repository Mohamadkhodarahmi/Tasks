import {useEffect, useRef, useState} from "react";


export default function App(){

    const [count, setCount] = useState(0);

    useEffect(() => {
        let timer = setTimeout(() => {
            setCount((count) => count + 1);
        }, 1000);

        return () => clearTimeout(timer)
    },[]);





    return <div>
        <h1> {count} times! </h1>
        <div className={'justify-center'}>
           <li >
               to do task
           </li >
           <li>
               to do task
           </li>
           <li>
               to do task
           </li>
           <li>
               to do task
           </li>
        </div>

    </div>

}