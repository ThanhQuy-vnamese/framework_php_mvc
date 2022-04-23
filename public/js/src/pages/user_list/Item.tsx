export const Items = ({ currentItems }: { currentItems: any }) => {
    return (
        <>
            {currentItems &&
                currentItems.map(item => (
                    <div>
                        <h3>Item #{item}</h3>
                    </div>
                ))}
        </>
    );
};
