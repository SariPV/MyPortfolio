import React from 'react';
import './simplecard.css';
import Simple1 from '../resumeImg/Simple1.jpeg'
import Simple2 from '../resumeImg/Simple2.jpeg'
import Simple3 from '../resumeImg/Pro3.jpeg'
import { Link } from 'react-router-dom';



function Simple(){
    return(
        <>
            <Card3 
            title="Simple Template 1"
            img={Simple1}/>
            
            <Card3
            title="Simple Template 2"
            img={Simple2}
            />
            <Card3
            img={Simple3}
            title="Simple Template 3"/>
        </>
    );
}

function Card3(props){
    return(
        <div className="card">
            <div className="card_body">
                <h2 className="card_title">{props.title}</h2>       
                <img src={props.img}/>
                
            </div>
            <Link to="/sign-up">
                <button className="Preview_button" >Preview</button>
            </Link>   
            <Link to="/products"> 
                <button className="download_button" >Dowload PDF</button>
            </Link>
        </div>
        
    )

}
export default Simple;