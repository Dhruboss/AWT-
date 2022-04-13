import React from 'react';
import { NavLink as Link } from 'react-router-dom';

const ProductData = (props) => {
    const {id,name,price}=props.products
    return (
        <Link to ={"/productlist/"+id} className="productlist">
            <p>{name}</p>
            <p>{price}</p>
        </Link>
    );
};

export default ProductData;