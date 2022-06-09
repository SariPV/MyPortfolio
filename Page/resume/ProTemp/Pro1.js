import React from 'react';
import './card.css';
import Pro1 from '../resumeImg/Pro1.jpeg'
import Pro2 from '../resumeImg/Pro2.jpeg'
import Pro3 from '../resumeImg/Pro3.jpeg'
import { Link } from 'react-router-dom';



function Pro(){
    return(
        <>
            <Card 
            title="Professional Template1"
            img={Pro1}/>
            
            <Card
            title="Professional Template2"
            img={Pro2}
            />
            <Card
            img={Pro3}
            title="Professional Template3"/>
        </>
    );
}

function Card(props){
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
export default Pro;