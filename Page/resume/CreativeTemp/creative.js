
import './creative.css';
import creative1 from '../resumeImg/Creative1.jpeg'
import React from 'react';
import { Link } from 'react-router-dom';


function Creative(){
    return(
        <>
            <Card2
            title="Creative Template 1"
            img={creative1}/>
            
            <Card2
            title="Creative Template 2"
            
            />
            <Card2
            
            title="Creative Template 2"/>
        </>
    );
}

function Card2(obj){
    return(
        <div className="Card2">
            <div className="Card2_body">
                <h2 className="Card2_title">{obj.title}</h2>       
                <img src={obj.img}/>
                
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
export default Creative;